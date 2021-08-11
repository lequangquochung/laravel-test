<?php
include('lib/dom/simple_html_dom.php');
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


$file_url = 'http://www.vsd.vn/vi/alc/6?page=7';
$file = file_get_html($file_url, false, stream_context_create($arrContextOptions));
$listContent = $file->find('#d_list_news');
foreach ($listContent as $item) {
    $itemValue = $item->find('ul li h3 a');

    foreach ($itemValue as $new) {
        echo '<a target="_blank" href="http://www.vsd.vn' . $new->href . '">' . $new->plaintext . '</a> <br>';
    }
    // echo $itemValue;
}
// print_r($listContent);
// echo $file;
?>

<?php
echo "<script language='javascript'>
        // alert('hello');
    </script>
    ";
?>

@include('master.master')