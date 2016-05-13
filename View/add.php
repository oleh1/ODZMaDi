<!--<form action="addDb1" method="POST">
<table>
    <tr align="center">
        <td>Введите персональный ID студента</td>
        <td>П.І.Б. студента</td>
        <td>Номер залікової книжки</td>
        <td>Рік вступу</td>
        <td>Факультет</td>
        <td>Спеціальність</td>
        <td>Група</td>
        <td>Семестр</td>
        <td>Назва предмету</td>
        <td>Вид звітності</td>
        <td>Оцінка по шкалі ECTS</td>
        <td>Національна оцінка</td>
        <td>Рейтингова оцінка</td>
        <td>Дата</td>
        <td>Прізвище та звання викладача</td>
        <td>Кількість годин</td>
    </tr>


    <tr align="center">
        <td><input type="text" name="id"></td>
        <td><textarea rows="3" cols="17" name="a"></textarea></td>
        <td><input type="text" name="b"></td>
        <td>
            <select name="c">
                <?php /*for($x=2000; $x<=2017; $x++): */?>
                <option value="<?/*= $x */?>"><?/*= $x */?></option>
                <?php /*endfor */?>
            </select>
        </td>
        <td><input type="text" name="d"></td>
        <td><input type="text" name="e"></td>
        <td><input type="text" size="4" name="f"></td>
        <td><input type="text" size="9" name="g"></td>
        <td>
            <select name="h">
                <option value="h1">Об'єктно-орієнтований аналіз</option>
                <option value="h2">Проектування веб-орієнтованих</option>
                <option value="h3">Сучасні технології візуалізаці</option>
                <option value="h4">Теорія та методи машинної граф</option>
                <option value="h5">Іноземна мова</option>
            </select>
        </td>
        <td>
            <select name="i">
                <option value="залік">залік</option>
                <option value="іспит">іспит</option>
                <option value="КП">КП</option>
                <option value="КР">КР</option>
            </select>
        </td>
        <td>
            <select name="j">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="FX">FX</option>
                <option value="F">F</option>
            </select>
        </td>
        <td>
            <select name="j2">
                <option value="Відмінно">Відмінно</option>
                <option value="Добре">Добре</option>
                <option value="Задовільно">Задовільно</option>
                <option value="Незадовільно">Незадовільно</option>
            </select>
        </td>
        <td>
            <select name="j3">
                <?php /*for($y=100; $y >=1; $y--): */?>
                    <option value="<?/*= $y */?>"><?/*= $y */?></option>
                <?php /*endfor */?>
            </select>
        </td>
        <td><input type="date" name="k"></td>
        <td><input type="text" name="l"></td>
        <td><input type="text" name="m"></td>
    </tr>
</table>
    <input type="submit">
    </form>-->




<h1>Додати студента в базу даних</h1>
<?php if(isset($_GET['no'])): ?>
<font color="red">Такий номер залікової книжки вже існує</font>
    <?php endif ?>
<form action="addDb1" method="POST">
    <table>
        <tr align="center">
            <td>Номер залікової книжки</td>
            <td>П.І.Б. студента</td>
        </tr>
        <tr>
            <td><input type="text" name="id" pattern="[0-9]+" required></td>
            <td><input type="text" name="a" required></td>
        </tr>
        </table>
    <input type="submit">
    </form><br>

<a href="#" onclick="openbox('box1'); return false"><b>Додати дані про студента</b></a>
<div id="box1" style="display: none;">

<form action="addDb1?id=1" method="POST">
    <table>
        <tr align="center">
            <th>П.І.Б. студента</th>
            <th>Назва предмету</th>
            <th>Вид звітності</th>
            <th>Оцінка по шкалі ECTS</th>
            <th>Національна оцінка</th>
            <th>Рейтингова оцінка</th>
            <th>Дата</th>
            <th>Прізвище викладача</th>
        </tr>
        <tr>
            <td align="center">
                <select name="id" required>
                    <?php while($a = $data_all->fetch_array()): ?>
                    <option value="<?= $a['id_name'] ?>"><?= $a['name'] ?></option>
                    <?php endwhile ?>
                </select>
            </td>
            <td align="center">
                <select name="h">
                    <option value="h1">Об'єктно-орієнтований аналіз</option>
                    <option value="h2">Проектування веб-орієнтованих</option>
                    <option value="h3">Сучасні технології візуалізаці</option>
                    <option value="h4">Теорія та методи машинної граф</option>
                    <option value="h5">Іноземна мова</option>
                </select>
            </td>
            <td align="center">
                <select name="i">
                    <option value="залік">залік</option>
                    <option value="іспит">іспит</option>
                    <option value="КП">КП</option>
                    <option value="КР">КР</option>
                </select>
            </td>
            <td align="center">
                <select name="j">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="FX">FX</option>
                    <option value="F">F</option>
                </select>
            </td>
            <td align="center">
                <select name="j2">
                    <option value="Відмінно">Відмінно</option>
                    <option value="Добре">Добре</option>
                    <option value="Задовільно">Задовільно</option>
                    <option value="Незадовільно">Незадовільно</option>
                </select>
            </td>
            <td align="center">
                <select name="j3">
                    <?php for($y=100; $y >=1; $y--): ?>
                        <option value="<?= $y ?>"><?= $y ?></option>
                    <?php endfor ?>
                </select>
            </td>
            <td align="center"><input type="date" name="k"></td>
            <td align="center"><input type="text" name="l"></td>
        </tr>
    </table>
    <input type="submit">
</form>

    </div>