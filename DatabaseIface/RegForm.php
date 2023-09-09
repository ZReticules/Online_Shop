<FORM METHOD="POST">
    ФИО
    <BR>
    <TEXTAREA NAME="U_Name" ROWS="1" TYPE="text" COLS="40" style="resize: none" placeholder="Иванов Иван Иванович"></TEXTAREA>
    <BR>
    Город проживания
    <BR>
    <TEXTAREA NAME="U_City" ROWS="1" TYPE="text" COLS="25" style="resize: none"></TEXTAREA>
    <BR>
    Возраст
    <BR>
    <TABLE for="U_Age">
        <TR>
            <TEXTAREA NAME="U_Age" ID="U_Age" ROWS="1" TYPE="number" COLS="25" VALUE = "0" style="resize: none" readonly></TEXTAREA>
            <INPUT TYPE="SUBMIT" VALUE="<" NAME="Dec" ONCLICK ="ChangeAge(-1)"></INPUT>
            <INPUT TYPE="SUBMIT" VALUE=">" NAME="Inc" ONCLICK ="ChangeAge(1)"></INPUT>
        </TR>
    </TABLE>
    <BR>
    Пароль
    <BR>
    <INPUT NAME="U_Password" ID="Pas1" ROWS="1" COLS="25" TYPE="password" style="resize: none"></TEXTAREA>
    <BR>
    Повторите пароль
    <BR>
    <INPUT NAME="Rep_Password" ID="Pas2" ROWS="1" COLS="25" TYPE="password" style="resize: none"></TEXTAREA>
    <BR>
    <input id="ShowPas" type="checkbox" onclick="Show_Hide_Pas();">
    <label for="ShowPas">Показать пароль</label>
    <BR>
    <INPUT TYPE="SUBMIT" VALUE="Отмена" ONCLICK="window.close();" NAME="CancelB">
    <INPUT TYPE="SUBMIT" VALUE="Сохранить" ONCLICK="NoSubmit();" NAME="SaveB">
</FORM>
<?php
    include __DIR__ . '/Registration.php'
?>
<script src="Registration.js" type="text/javascript"></script>