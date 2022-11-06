<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        input {
            margin-bottom: 5px;
        }
        .imageFlag
        {
            background: black;
            width: 230px;
        }
        img{
            margin: 5px;
        }
        .selected
        {
            border: 3px solid white;

        }

    </style>
</head>
<body>
<form action="Task4TwoForm.php" enctype="multipart/form-data" method="post">
    <?php
    $values=[
        'login'=>"",
        'password'=>"",
        'TWOpassword'=>"",
        'Stat'=>'',
        'city'=>'',
        'checkboxArr'=>[],
        'AboutYour'=>''
    ];
    $keys=array_keys($values);
    foreach($keys as $key)
    {
        if(isset($_SESSION[$key]))
            $values[$key]=$_SESSION[$key];
        if(isset($_POST[$key]))
            $values[$key]=$_SESSION[$key]=$_POST[$key];
    }
    ?>
   <table>
       <tr>
    <td>Логін:</td>
    <td><input type="text" name="login" value="<?php if(isset($values['login'])) echo $values['login']?>"><br></td>

       </tr>
       <tr>
           <td>Пароль:</td>
           <td><input type="password" name="password" value="<?php if(isset($values['password'])) echo $values['password']?>"><br></td>
       </tr>
       <tr>
           <td>Пароль(ще раз):</td>
           <td><input type="password" name="TWOpassword" value="<?php if(isset($values['TWOpassword'])) echo $values['TWOpassword']?>"><br></td>
       </tr>
       <tr>

           <td> Стать:</td><td><?php

           if ($values['Stat']=='Чоловік') {
               echo "
               <input type=\"radio\" name=\"Stat\"  checked='checked' value='Чоловік'>Чоловік
            <input type=\"radio\" name=\"Stat\"  value=\"Жінка\">Жінка";
               }
           elseif ($values['Stat']=='Жінка') {
               echo "
               <input type=\"radio\" name=\"Stat\" value='Чоловік' >Чоловік
                <input type=\"radio\" name=\"Stat\"  checked='checked' value=\"Жінка\">Жінка";
           }
           else
           {
               echo "
               <input type=\"radio\" name=\"Stat\" value='Чоловік' >Чоловік
                <input type=\"radio\" name=\"Stat\" value=\"Жінка\">Жінка";
           }

           ?>

    </td>
       </tr>
       <tr>
           <td>
            Місто:
           </td>
           <td>
    <?php $cities=array('Київ','Харків','Житомир','Львів','Одеса'); ?>
    <input name="city" type="text" list="city" value="<?php if(isset($values['city'])) echo $values['city']?>">
    <datalist id="city" type="text" list="city">
        <?php
        foreach($cities as $city){
            echo '<option value="'.$city.'">';
        }

        ?>
    </datalist>
    </select></td></tr>
       <tr>
           <td>
    Улюблені ігри:</td>
           <td>
               <?php
               if(isset($values['checkboxArr'][0]))
                        echo '<input type="checkbox" name="checkboxArr[]"  checked="checked" value="Футбол">Футбол<br>';
                    else  echo '<input type="checkbox" name="checkboxArr[]"  value="Футбол">Футбол<br>';
               if(isset($values['checkboxArr'][1]))
                    echo '<input type="checkbox" name="checkboxArr[]"  checked="checked" value="Баскетбол">Баскетбол<br>';
                else  echo '<input type="checkbox" name="checkboxArr[]"  value="Баскетбол">Баскетбол<br>';
               if(isset($values['checkboxArr'][2]))
               echo '<input type="checkbox" name="checkboxArr[]"  checked="checked" value="Волейбол">Волейбол<br>';
               else  echo '<input type="checkbox" name="checkboxArr[]"  value="Волейбол">Волейбол<br>';
               if(isset($values['checkboxArr'][3]))
               echo '<input type="checkbox" name="checkboxArr[]"  checked="checked" value="Шахи">Шахи<br>';
               else  echo '<input type="checkbox" name="checkboxArr[]"  value="Шахи">Шахи<br>';
               if(isset($values['checkboxArr'][4]))
                echo '<input type="checkbox" name="checkboxArr[]"  checked="checked" value="World of Tanks">World of Tanks<br>';
                else  echo '<input type="checkbox" name="checkboxArr[]"  value="World of Tanks">World of Tanks<br>';?>
                        </td></tr>
       <tr><td>Про себе:</td>
           <td><textarea name="AboutYour" >
                  <?php if(isset($values['AboutYour'])) echo $values['AboutYour']?>
               </textarea><br></td></tr>
       <tr>
           <td>Фотографія:</td>
           <td>
               <input type="file" name="Photo">
           </td>
       </tr>
       <tr>
           <td></td>
           <td><input type="submit" value="Зареєструватися"></td>
       </tr>
   </table>
    <div class="imageFlag">
     <img class="UKR" src="https://cdn.27.ua/sc--media--prod/default/82/13/ed/8213edef-2996-4de1-a9ea-fd07d08d3e21.jpeg"  width="30px" alt="">
    <img class="Pl" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Flag_of_Poland.svg/375px-Flag_of_Poland.svg.png"  width="30px" alt="">
    <img class="EN" src="https://kapterka.com.ua/image/data/flagi/flag-velikobritanii-union-jack.jpg"  width="30px" alt="">
    <img class="DE" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/2560px-Flag_of_Germany.svg.png"  width="30px" alt="">
    <img class="FR" src="https://kapterka.com.ua/image/data/franci.jpg"  width="30px" alt="">
    </div>
</form>
<a href="Task4Lang.php">ToLang</a>
<script>
    document.querySelector('.imageFlag').addEventListener(
      'click',(event)=>
        {
            let divImg=document.querySelector('.imageFlag');
            for(let elem of divImg.children)
            {
                elem.classList.remove('selected');
            }
            let target=event.target;
            document.cookie='lang='+target.className;
            target.classList.add('selected');

        }
    );
</script>
</body>
</html>

