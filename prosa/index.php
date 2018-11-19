  <?php
        // Enabling error reporting
        error_reporting(-1);
        ini_set('display_errors', 'On');
 
      	    
        $fields = null;
           
        // Set POST variables
        $url = 'https://api.prosa.ai/v1/topics';
        $server_key = "svFg9Jlk0r2EkkcpDqK0Illayr1XKhExZjUy8RFl";
        
        $headers = array(
            'Authorization: key=' . $server_key,
            'Content-Type: application/json'
        );
        // Open connection
        $ch = curl_init();

            $message = '{"text":"aku cinta indonesia"}';
            $res = array();
            $res['body'] = $message;
            
            $fields = array(
                'topic' => '',
                'confidence' => '',
            );
           
            
        echo json_encode($fields);
           
        
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
 
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
 
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            echo 'Curl failed: ' . curl_error($ch);
        }



 
        // Close connection
        curl_close($ch);
               
        ?>