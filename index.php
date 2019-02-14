<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ระบบเสนอหัวข้อโครงงาน</h1>
    <form action="project_data.php" method="get">
        <fieldset id="sect1">
            <legend>ส่วนที่ 1 ข้อมูลผู้จัดทำโครงงาน </legend>
            <label for="sid">รหัสนักศึกษา</label><input type="text" name="sid">
            <label for="sid">ชื่อ</label><input type="text" name="fname">
            <label for="sid">นามสกุล</label><input type="text" name="lname"><br>
            <label for="program">สาขาวิชา</label>
            <select name="program">
                <option value="1">วิทยาการคอมพิวเตอร์</option>
                <option value="2">เทคโนโลยีสารสรเทศ</option>
                <option value="3">เทคโนโลยีเครือข่ายคอมพิวเตอร์</option>
                <option value="4">ภูมิศาสคร์สารสนเทศ</option>
                <option value="5">คอมพิวเตอร์ศึกษา</option>
            </select><br>
            <label for="program">คณะ</label>
            <select name="program">
                <option value="1">ครุศาสตร์</option>
                <option value="2">วิทยาการคอมพิวเตอร์</option>
            </select><br>
            <label for="std_year">ชั้นปี</label>
            <input type="radio" name="std_year" value="1"><label>ปี1</label>
            <input type="radio" name="std_year" value="2"><label>ปี2</label>
            <input type="radio" name="std_year" value="3"><label>ปี3</label>
            <input type="radio" name="std_year" value="4"><label>ปี4</label>
            <input type="radio" name="std_year" value="5"><label>ปี5</label>
        </fieldset>
        <fieldset id="sect2">
            <legend>ส่วนที่ 2 ข้อมูลโครงงาน </legend>
            <label for="prj_name_th">ชื่อโครงงาน(ไทย)</label><input type="textarea" name="prj_name_th">
            <label for="prj_name_en">ชื่อโครงงาน(อังกฤษ)</label><input type="textarea" name="prj_name_en">
            <label for="prj_type">ประเภทโครงงาน</label>
            <select name="prj_type">
                <option value="1">เกม</option>
                <option value="2">โปรแกรมเดสก์เทป</option>
                <option value="3">โปรแกรมมือถือ </option>
            </select><br>
            <label for="prj_tool">เครื่องมือที่ใช้</label>
            <input type="checkbox" name="prj_tool[]" ><label>HTML</label>
            <input type="checkbox" name="prj_tool[]" ><label>CSS</label>
            <input type="checkbox" name="prj_tool[]" ><label>JavaScript</label>
            <input type="checkbox" name="prj_tool[]" ><label>Bootstrap</label>
            <input type="checkbox" name="prj_tool[]" ><label>Material Design</label>
            <input type="checkbox" name="prj_tool[]" ><label>Angular</label>
            <input type="checkbox" name="prj_tool[]" ><label>React</label>
            <input type="checkbox" name="prj_tool[]" ><label>PHP</label>
            <input type="checkbox" name="prj_tool[]" ><label>MySQL</label>
            <input type="checkbox" name="prj_tool[]" ><label>ChartJS</label>
            <label >อาจารย์ที่ปรึกษา</label>
            <select name="prj_advisor">
                <option value="1">ผศ. บุญเรือน พฤกษ์ศศิธร</option>
                <option value="2">ผศ. ทิพย์วรรณ ฟูเฟื่อง</option>
            </select>
        </fieldset>
        <input type="submit" value="Go...">
    </form>
</body>
</html>