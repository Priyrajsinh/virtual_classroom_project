<?php

include "include/connection.php";

session_start();
require_once 'jwt/BeforeValidException.php';
require_once 'jwt/ExpiredException.php';
require_once 'jwt/SignatureInvalidException.php';
require_once 'jwt/JWT.php'; // not needed but keeping it since you have, no issue

use \Firebase\JWT\JWT;

class Zoom_Api {

    private $account_id = 'uRAsACdoSOOL10mJF4-b4Q';
    private $client_id = 'oOeRV9UrRzesF0CUmQa0fA';
    private $client_secret = 'vUoYt6Bf6b0IwpbuuN9RaZzQ96i1lwgm';

    private function getAccessToken() {
        $url = "https://zoom.us/oauth/token?grant_type=account_credentials&account_id=" . $this->account_id;

        $headers = array(
            "Authorization: Basic " . base64_encode($this->client_id . ":" . $this->client_secret),
            "Content-Type: application/x-www-form-urlencoded"
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($response, true);
        if (isset($response['access_token'])) {
            return $response['access_token'];
        } else {
            throw new Exception("Failed to get access token: " . json_encode($response));
        }
    }

    protected function sendRequest($data) {
        $request_url = 'https://api.zoom.us/v2/users/me/meetings';
        $headers = array(
            "authorization: Bearer " . $this->getAccessToken(),
            'content-type: application/json'
        );
        $postFields = json_encode($data);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $request_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);

        if (!$response) {
            return $err;
        }
        return json_decode($response);
    }

    public function createAMeeting($data = array()) {
        $start_time = $data['start_date'];

        $createAMeetingArray = array();
        if (!empty($data['alternative_host_ids'])) {
            if (count($data['alternative_host_ids']) > 1) {
                $alternative_host_ids = implode(",", $data['alternative_host_ids']);
            } else {
                $alternative_host_ids = $data['alternative_host_ids'][0];
            }
        }

        $createAMeetingArray['topic']      = $data['meetingTopic'];
        $createAMeetingArray['agenda']     = !empty($data['agenda']) ? $data['agenda'] : "";
        $createAMeetingArray['type']       = !empty($data['type']) ? $data['type'] : 2; // Scheduled
        $createAMeetingArray['start_time'] = $start_time;
        $createAMeetingArray['timezone']   = $data['timezone'];
        $createAMeetingArray['password']   = !empty($data['password']) ? $data['password'] : "";
        $createAMeetingArray['duration']   = !empty($data['duration']) ? $data['duration'] : "";
        $createAMeetingArray['settings']   = array(
            'join_before_host'  => !empty($data['join_before_host']) ? true : false,
            'host_video'        => !empty($data['option_host_video']) ? true : false,
            'participant_video' => !empty($data['option_participants_video']) ? true : false,
            'mute_upon_entry'   => !empty($data['option_mute_participants']) ? true : false,
            'enforce_login'     => !empty($data['option_enforce_login']) ? true : false,
            'auto_recording'    => !empty($data['option_auto_recording']) ? $data['option_auto_recording'] : "none",
            'alternative_hosts' => isset($alternative_host_ids) ? $alternative_host_ids : ""
        );
        return $this->sendRequest($createAMeetingArray);
    }
}

// Main execution
$zoom_meeting = new Zoom_Api();

try {
    date_default_timezone_set("Asia/Calcutta");
    $t1 = $_POST['subname'];
    $d1 = $_POST['SDate'];
    $date = date_create($d1);

    $starttime = date_format($date, "c"); // ISO8601 format

    $z = $zoom_meeting->createAMeeting(
        array(
            'start_date' => $starttime,
            'meetingTopic' => $t1,
            'timezone' => "Asia/Calcutta"
        )
    );

    $join = $z->join_url;
    $start = $z->start_url;
    $passcode = $z->password;
    $id = $z->id;
    $topic1 = $z->topic;
    $stime = $z->start_time;

    $cmd = "INSERT INTO meeting_details(start_url, join_url, meeting_id, passcode, topic, stime) 
            VALUES ('$start', '$join', '$id', '$passcode', '$t1', '$stime')";
    
    $result = mysqli_query($con, $cmd) or die(mysqli_error($con));

    if ($result) {
        echo "<script>alert('Meeting Details Added Successfully');</script>";
        echo "<script>location.href='viewmeeting.php';</script>";
    } else {
        echo "<script>alert('Meeting Details Adding Failed');</script>";
        echo "<script>location.href='hostmeeting.php';</script>";
    }

} catch (Exception $ex) {
    echo $ex;
}

?>
