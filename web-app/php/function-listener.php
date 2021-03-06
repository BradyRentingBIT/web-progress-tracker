<?php

    function refreshPage() {
        echo "<script>location.href = '';</script>";
    }

    function redirectPage($address) {
        echo "<script>location.href = '$address'</script>";
    }

    function showAlertDanger($alert) {
        $alertMessage = '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          '.$alert.'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        ';
        return $alertMessage;
    }

    function showAlertSuccess($alert) {
        $alertMessage = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  '.$alert.'
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ';
        return $alertMessage;
    }

    function alertMessage($message) {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }