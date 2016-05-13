<form action="serch" method="POST">
    <input size="20" name="serch" type="text" style="
border: 2px outset greenyellow;
padding: 5px 2px 5px 30px;
background: url(&quot;http://1.bp.blogspot.com/_hljKDuw-cxQ/SDEJPIeJG2I/AAAAAAAAGaM/N_Lu4sxLH_4/s00/lpDemoBuscador.gif&quot;) no-repeat scroll 5% 50% palegreen;
">
    <input type="submit" value="Знайти" style="
    border: 2px outset greenyellow;
    background-color: palegreen;
    ">
</form>
<table class="table_b">
    <th class="td_b">Номер залікової книжки</th>
    <th class="td_b">Ф.И.О</th>
    <th class="td_b">Об'єктно-орієнтований аналіз</th>
    <th class="td_b">Проектування веб-орієнтованих</th>
    <th class="td_b">Сучасні технології візуалізаці</th>
    <th class="td_b">Теорія та методи машинної граф</th>
    <th class="td_b">Іноземна мова</th>
    <th class="td_b">Середній бал</th>

    <?php while($a = $serch->fetch_array()): $gh1=0; $gh2=0; $gh3=0; $gh4=0; $gh5=0 ?>
        <?php $q = $a['id_name']; ?>
        <tr>
            <td align="center" class="td_b"><?= $a['id_name'] ?></td>
            <td align="center" class="td_b"><?= $a['name'] ?></td>
            <td align="center" class="td_b"><?= $a['h1'] ?></td>
            <td align="center" class="td_b"><?= $a['h2'] ?></td>
            <td align="center" class="td_b"><?= $a['h3'] ?></td>
            <td align="center" class="td_b"><?= $a['h4'] ?></td>
            <td align="center" class="td_b"><?= $a['h5'] ?></td>

            <?php

            if($a['gh1'] != 0){
                $gh1 = 1;
            }
            if($a['gh2'] != 0){
                $gh2 = 1;
            }
            if($a['gh3'] != 0){
                $gh3 = 1;
            }
            if($a['gh4'] != 0){
                $gh4 = 1;
            }
            if($a['gh5'] != 0){
                $gh5 = 1;
            }

            $x = $gh1 + $gh2 + $gh3 + $gh4 + $gh5;
            $c[0] = $a['gh1'] + $a['gh2'] + $a['gh3'] + $a['gh4'] + $a['gh5'];
            $e = array_sum($c);
            if($x != null){ $e = $e / $x; }

            ?>
            <td align="center" class="td_b"><?= $e ?></td>
        </tr>
    <?php endwhile ?>
</table>
<?php if(isset($q)): ?>
    <form action="clear">
        <input type="submit" value="Очистити">
    </form>
<?php endif ?>















<!--<table class="table_b">
    <tr>
        <td class="td_b">Ф.И.О</td>
        <?php
/*        while($h = $all_h->fetch_array()){
            $h1[] = $h['h']; }
        $h2 = array_unique($h1);
        */?>
        <?php /*foreach($h2 as $h3): */?>
            <td class="td_b"><?/*= $h3; */?></td>
        <?php /*endforeach */?>
    </tr>
    <?php
/*    while($a = $all->fetch_array()){
        $a1[] = $a['a']; }
    $a2 = array_unique($a1);
    */?>
    <?php /*foreach($a2 as $a3): */?>
    <tr>
        <td class="td_b"><?/*= $a3; */?></td>
    </tr>
    <?php /*endforeach */?>
</table>-->



<?php
/*
$data = [];
while($a = $all->fetch_array()){
    $data[$a['id']] = $a;
}

$predmet = [];
$names = [];
$ocenka = [];
foreach($data AS $id => &$value){
    $predmet[$id] = $value['h'];
    //var_dump($predmet[$id]);

    $names[$id] = $value['a'];
    //var_dump($names[$id]);

    $ocenka[$id] = $value['j'];
    //var_dump($ocenka[$id]);
}

*/?>

<!--<table class="table_b">
    <tr>
        <th>F.I.O</th>
    <?php /*$i = 0; foreach($data AS $a): $i++ */?>

        <th><?php /*echo $predmet[$a['id']]*/?></th>
    </tr>
        <tr>
            <th>
                <?php /*echo $names[$a['id']]*/?>
            </th>
            <th>
                <?php /*echo $ocenka[$a['id']]*/?>
            </th>
    <?php /*endforeach; */?>
        </tr>
</table>-->



<!--<table class="table_b">

    <tr>
        <td class="td_a">Ф.И.О</td>
        <?php /*while($h = $all_h->fetch_array()): */?>
            <td class="td_b"><?/*= $h['h'] */?></td>
        <?php /*endwhile */?>
    </tr>

    <?php /*while($a = $all->fetch_array()): */?>
        <tr>
            <td class="td_b"><?/*= $a['a'] */?></td>


            <?php /*while($j = $all_j->fetch_array()): */?>
                <td><?/*= $j['j'] */?></td>
            <?php /*endwhile */?>


        </tr>
    <?php /*endwhile */?>
</table>-->



<!--<table class="table_a">
<tr>
    <td class="td_a">Ф.И.О</td>
    <td class="td_a">Об'єктно-орієнтований аналіз</td>
    <td class="td_a">Проектування веб-орієнтованих</td>
    <td class="td_a">Сучасні технології візуалізаці</td>
    <td class="td_a">Теорія та методи машинної граф</td>
    <td class="td_a">Іноземна мова</td>
</tr>
</table>-->