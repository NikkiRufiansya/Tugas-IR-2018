<?php
class Curl {
    public function postCURL($_url, $_param){
        // membuat pasangan name dan value dipisahkan tanda '&'
        $curl = curl_init();

        $option = array(
            CURLOPT_URL => $_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($_param),
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "cache-control: no-cache",
                "x-api-key: svFg9Jlk0r2EkkcpDqK0Illayr1XKhExZjUy8RFl"
            )
        );

        curl_setopt_array($curl, $option);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
}
?>