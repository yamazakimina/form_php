<?php
// 表作成
$file_read = "data/data.txt";
$data = file_get_contents($file_read);
// グラフ作成
$graph_read = "data/graph.txt";
$graph_open = fopen($graph_read,"r");
$graph_array = [];
while(!feof($graph_open)){
    $graph_data = fgets($graph_open);
    $graph_s = explode(",",$graph_data);
    $graph_array[] = $graph_s;
}
fclose($graph_open);
// $json = json_encode($data_array);
$counts = array_count_values(array_column($graph_array, 6));
$five = $counts[5];
$four = $counts[4];
$three = $counts[3];
$two = $counts[2];
$one = $counts[1];
?>

<html>
    <table border=1>
        <tr>
        <th>名前</th>
        <th>メールアドレス</th>
        <th>商品</th>
        <th>性別</th>
        <th>購入日</th>
        <th>料金</th>
        <th>評価</th>
        <th>備考</th>
        </tr>
        <?=$data?>
    </table>

    <canvas id="stage"></canvas>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
<script>
    // const data = JSON.parse('')
    // console.log(data);
    //「月別データ」
    var mydata = {
    labels: ["⭐️1","⭐️2","⭐️3","⭐️4","⭐️5"],
    datasets: [
        {
        label: '⭐️レビュー',
        hoverBackgroundColor: "rgba(255,99,132,0.3)",
        data: [<?=$one?>, <?=$two?>, <?=$three?>, <?=$four?>, <?=$five?>],
        }
    ]
    };
    
    //「オプション設定」
    var options = {
    title: {    
        display: true,
        text: '5段階評価'
    }
    };

    var canvas = document.getElementById('stage');
    var chart = new Chart(canvas, {

    type: 'bar',  //グラフの種類
    data: mydata,  //表示するデータ
    option: options  //オプション設定
    });
</script>