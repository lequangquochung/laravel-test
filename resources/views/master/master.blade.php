<?php
    require_once('lib/dom/simple_html_dom.php');
    $arrContextOptions = array(
        "ssl" => array(
            // skip error "Failed to enable crypto" + "SSL operation failed with code 1."
            "verify_peer" => false,
            "verify_peer_name" => false,
        ),
        // skyp error "failed to open stream: operation failed" + "Redirection limit reached"
        'http' => array(
            'max_redirects' => 101,
            'ignore_errors' => '1'
        ),
        'header' => array(
            'Content-Type' => 'text/html',
            'charset' => 'utf-8'
        )
    );

    $file_url = 'https://webdamn.com/demo/datatables-add-edit-delete-php-mysql-demo/';
    $file = file_get_contents($file_url, false, stream_context_create($arrContextOptions));
    // $listContent = $file->find('#d_list_news');
    // foreach ($listContent as $item) {
    //     $itemValue = $item->find('.list-news li');
    //     $getDates = $item->find('ul li div',0)->plaintext;
    //     foreach ($itemValue as $new) {
    //         $getTitle = $new->find('h3 a',0);
    //         $getDate = $new->find('div',0)->plaintext;
    //         $formatDate = explode(" ",$getDate);
    //         echo '
    //         <div class="media mb-2">
    //             <div class="media-body title-render" style="border-bottom: 1px solid #9598a178;padding-bottom: 5px;">
    //                 <a target="_blank" href="http://www.vsd.vn' . $getTitle->href . '">' . $getTitle->plaintext . '</a>
    //                 <br>
    //                 <span class="show_time" style="margin: 10px 0">
    //                     '.$formatDate[3].' '. $formatDate[5].'
    //                 </span>
                    
    //             </div>
    //         </div> 
            
    //         ';
    //     //   echo "$getDate </br>";
            
            
            
    //     }
    // }  
    echo $file;
?>