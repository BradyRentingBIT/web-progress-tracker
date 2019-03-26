<?php

    function refreshPage() {
        echo "<script>location.href = '';</script>";
    }


    function showAlertDanger($alert) {
        echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  '.$alert.'
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ';
    }

    function showAlertSuccess($alert) {
        echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  '.$alert.'
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                ';
    }