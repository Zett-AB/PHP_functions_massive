<?php
    $nickname=" Alexander";
    $hello="Привет";
    $text_hello="Продолжаем обучение.";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функции для работы с массивом</title>
</head>
<body>
    <header class="">
        <?php echo $hello . $nickname ."<br>" . $text_hello; ?>
        <h2>Функции для работы с массивами.</h2>
    </header>
    <div class="step__first">
        <p>
            В PHP существуют специальные функции для работы с массивами.<br>
            Они нужны для того, чтобы не писать лишний код, т.е. для оптимизации кода и улучшения его читабельности.
        </p>
    </div>
    <div class="step__first">
        <h3 class="subtitle">Функция  unset();</h3>
        <p>
            Функция unset(); - применяется для удаления элементов/значения из массива.<br>
            Данная функция имеет следующий синтаксис - unset(имя_массива[индекс/ключ]);<br>
            Пример:
            <ul>
                <li>Создаем массив arr - $arr = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос"];</li>
                <li>Теперь используя функцию foreach, выводим данные массива на экран/браузер</li>
                <li>foreach($arr as $key=>$value){</li>
                <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                <li>}</li>
            </ul> 
            В браузере видим список ключей и значений массива.<br>
            Результат внизу.
            <div class="code__php">
                <?php
                    $arr = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос"];
                    foreach($arr as $key=>$value){
                        echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                    }
                ?>
            </div>
            Теперь добавим в наш код функцию unset и удалим первый элемент/значение из нашего массива, а именно - "продукты".
            <ul>
                <li>Создаем массив arr - $arr = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос"];</li>
                <li>Пишем функцию unset($arr[0]);</li>
                <li>Теперь воспользуемя функцией foreach</li>
                <li>foreach($arr as $key=>$value){</li>
                <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                <li>}</li>
            </ul> 
            Ниже смотрим в браузере результат внесенных изменений в код. 
            <div class="code__php">
                <?php
                    $arr = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос"];
                    unset($arr[0]);
                    foreach($arr as $key=>$value){
                        echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                    }
                ?>
            </div> 
            Видим, что значение - продукты в нашем списке массива удалено, его нет.    
        </p>
    </div>
    <div class="step__first">
        <h3 class="subtitle">Функция  array_push();</h3>
            <p>
                Функция array_push(); - применяется для добавления элемента/значения в конец массива, т.е. новый элемент добавляется в конец списка значений массива.<br>
                Данная функция имеет следующий синтаксис - array_push(имя_массива, значение);<br>
                Пример:
                <ul>
                    <li>Создаем массив art - $art = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос"];</li>
                    <li>Теперь используя функцию foreach, выводим данные массива на экран/браузер</li>
                    <li>foreach($art as $key=>$value){</li>
                    <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                    <li>}</li>
                </ul> 
                В браузере видим список ключей и значений массива.<br>
                Результат нашего кода.
                <div class="code__php">
                    <?php
                        $art = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос"];
                        foreach($art as $key=>$value){
                            echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                        }
                    ?>
                </div>
                Теперь добавим в наш код функцию array_push и добавим в конец массива новыое значение(оно будет в конце/внизу списка), а именно - "груша".
                <ul>
                    <li>Создаем массив arе - $art = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос"];</li>
                    <li>Пишем функцию array_push($art, "груша");</li>
                    <li>Теперь воспользуемя функцией foreach</li>
                    <li>foreach($art as $key=>$value){</li>
                    <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                    <li>}</li>
                </ul> 
                Cмотрим в браузере результат внесенных изменений в код. 
                <div class="code__php">
                    <?php
                        $art = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос"];
                        array_push($art, "груша");
                        foreach($art as $key=>$value){
                            echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                        }
                    ?>
                </div> 
                Видим, что значение - "груша" появилось в нашем массиве в конце(самом низу)списка.    
            </p>
    </div>
    <div class="step__first">
        <h3 class="subtitle">Функция  array_unshift();</h3>
            <p>
                Функция array_unshift(); - применяется для добавления элемента/значения в начале массива, т.е. новый элемент добавляется в начале списка значений массива.<br>
                Данная функция имеет следующий синтаксис - array_unshift(имя_массива, значение);<br>
                Пример:
                <ul>
                    <li>Создаем массив arb - $arb = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "груша"];</li>
                    <li>Теперь используя функцию foreach, выводим данные массива на экран/браузер</li>
                    <li>foreach($arb as $key=>$value){</li>
                    <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                    <li>}</li>
                </ul> 
                В браузере видим список ключей и значений массива.<br>
                Результат нашего кода.
                <div class="code__php">
                    <?php
                        $arb = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос"];
                        foreach($arb as $key=>$value){
                            echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                        }
                    ?>
                </div>
                Теперь добавим в наш код функцию array_unshift(); и добавим в начало массива новыое значение, а именно - "груша".
                <ul>
                    <li>Создаем массив arb - $arb = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос"];</li>
                    <li>Пишем функцию array_unshift($arb, "груша");</li>
                    <li>Теперь воспользуемя функцией foreach</li>
                    <li>foreach($arb as $key=>$value){</li>
                    <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                    <li>}</li>
                </ul> 
                Cмотрим в браузере на результат внесенных изменений в код. 
                
                <div class="code__php">
                    <?php
                        $arb = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос"];
                        array_unshift($arb, "груша");
                        foreach($arb as $key=>$value){
                            echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                        }
                    ?>
                </div> 
                Видим, что значение - "груша" появилось в нашем массиве в конце(самом низу)списка.    
            </p>
    </div>
    <div class="step__first">
        <h3 class="subtitle">Функция  array_unique();</h3>
                <p>
                    Функция array_unique(); - применяется для добавления определения дубликата элемента/значения в массиве, т.е. поиска дубликата/дубликатов значений в массиве.<br>
                    Данная функция имеет следующий синтаксис - имя_масства=array_unique(имя_массива);<br>
                    Пример:
                    <ul>
                        <li>Создаем массив arс с дубликатом одного значения - "продукты" - $arс = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "груша", "продукты"];</li>
                        <li>Теперь используя функцию foreach, выводим данные массива на экран/браузер</li>
                        <li>foreach($arb as $key=>$value){</li>
                        <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                        <li>}</li>
                    </ul> 
                    В браузере видим список ключей и значений массива, с дубликатом - "продукты".<br>
                    Результат нашего кода.
                    <div class="code__php">
                        <?php
                            $arc = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "продукты"];
                            foreach($arc as $key=>$value){
                                echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                            }
                        ?>
                    </div>
                    Теперь добавим в наш код функцию array_uniqueft(); и проверим будет ли найден дубликат "продукты" в массиве arc и затем удален или нет.
                    <ul>
                        <li>Дублируем наш массив arс с дубликатом, - $arс = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "продукты"];</li>
                        <li>Пишем функцию $arc = array_unique($arc);</li>
                        <li>Теперь воспользуемя функцией foreach</li>
                        <li>foreach($arc as $key=>$value){</li>
                        <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                        <li>}</li>
                    </ul> 
                    Cмотрим в браузере на результат внесенных изменений в код. 
                    
                    <div class="code__php">
                        <?php
                            $arc = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "продукты"];
                            $arc=array_unique($arc);
                            foreach($arc as $key=>$value){
                                echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                            }
                        ?>
                    </div> 
                    Видим, что дублирующие значение - "продукты", расположенное в конце списка пропало, осталось только одно значение "продукты".    
                </p>
    </div>
    <div class="step__first">
        <h3 class="subtitle">Функция  array_reverse();</h3>
            <p>
                Функция array_reverse(); - применяется для вывода элементов/значений в массиве наоборот, т.е. в обратном порядке.<br>
                Данная функция имеет следующий синтаксис - имя_масства=array_reserve(имя_массива);<br>
                Пример:
                <ul>
                    <li>Создаем массив ard - $ard = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "груша", "малина"];</li>
                    <li>Теперь используя функцию foreach, выводим данные массива на экран/браузер</li>
                    <li>foreach($arв as $key=>$value){</li>
                    <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                    <li>}</li>
                </ul> 
                В браузере видим список ключей и значений массива.<br>
                Ниже результат нашего кода.
                <div class="code__php">
                    <?php
                        $ard = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "малина"];
                        foreach($ard as $key=>$value){
                                echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                                }
                    ?>
                </div>
                Теперь добавим в наш код функцию array_reverse(); и увидми, как измениться массив.
                <ul>
                    <li>Дублируем наш массив ard - $ard = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "малина"];</li>
                    <li>Пишем функцию $ard = array_reverse($ard);</li>
                    <li>Теперь воспользуемя функцией foreach</li>
                    <li>foreach($ard as $key=>$value){</li>
                    <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                    <li>}</li>
                </ul> 
                Cмотрим в браузере на результат внесенных изменений в код. 
                <div class="code__php">
                    <?php
                        $ard = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "малина"];
                        $ard=array_reverse($ard);
                        foreach($ard as $key=>$value){
                        echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                        }
                    ?>
                </div> 
                Видим, что список массива поменялся наоборот, то что было в начале списка, стало в конце, а то что было в конце списка  стало в его начало.    
            </p>                          
    </div>
    <div class="step__first">
        <h3 class="subtitle">Функция sort();</h3>
            <p>
                Функция sort(); - применяется для сортировки массива, т.е. например в алфавитном порядке.<br>
                Данная функция имеет следующий синтаксис - sort(имя_массива);<br>
                Пример:
                <ul>
                    <li>Создаем массив ard - $arf = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "груша", "малина", "вишня"];</li>
                    <li>Теперь используя функцию foreach, выводим данные массива на экран/браузер</li>
                    <li>foreach($arf as $key=>$value){</li>
                    <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                    <li>}</li>
                </ul> 
                В браузере видим список ключей и значений массива.<br>
                Ниже результат нашего кода.
                <div class="code__php">
                    <?php
                        $arf = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "малина", "вишня"];
                        foreach($arf as $key=>$value){
                                echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                                }
                    ?>
                </div>
                Теперь добавим в наш код функцию sort(); и увидми, как измениться массив.
                <ul>
                    <li>Дублируем наш массив arf - $arf = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "малина", "вишня"];</li>
                    <li>Пишем функцию sort($arf);</li>
                    <li>Теперь воспользуемя функцией foreach</li>
                    <li>foreach($arf as $key=>$value){</li>
                    <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                    <li>}</li>
                </ul> 
                Cмотрим в браузере на результат внесенных изменений в код. 
                <div class="code__php">
                    <?php
                        $arf = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "малина", "вишня"];
                        sort($arf);
                        foreach($arf as $key=>$value){
                        echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                        }
                    ?>
                </div> 
                Видим, что список массива поменялся и стал в алфавитном порядке.    
            </p>    
    </div>

    <div class="step__first">
        <h3 class="subtitle">Функция shuffle();</h3>
            <p>
                Функция shuffle(); - применяется для смешивания значений массива в случайном/рандомном порядке.<br>
                Данная функция имеет следующий синтаксис - shuflle(имя_массива);<br>
                Пример:
                <ul>
                    <li>Создаем массив arg - $arg = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "груша", "малина", "вишня"];</li>
                    <li>Теперь используя функцию foreach, выводим данные массива на экран/браузер</li>
                    <li>foreach($arg as $key=>$value){</li>
                    <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                    <li>}</li>
                </ul> 
                В браузере видим список ключей и значений массива.<br>
                Ниже результат нашего кода.
                <div class="code__php">
                    <?php
                        $arg = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "малина", "вишня"];
                        foreach($arg as $key=>$value){
                                echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                                }
                    ?>
                </div>
                Теперь добавим в наш код функцию shuffle(); и увидми, как измениться массив.
                <ul>
                    <li>Дублируем наш массив arg - $arg = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "малина", "вишня"];</li>
                    <li>Пишем функцию shuffle($arg);</li>
                    <li>Теперь воспользуемя функцией foreach</li>
                    <li>foreach($arg as $key=>$value){</li>
                    <li>echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."br>"</li>
                    <li>}</li>
                </ul> 
                Cмотрим в браузере на результат внесенных изменений в код. 
                <div class="code__php">
                    <?php
                        $arg = ["продукты", "бутылка с водой", "апельсин", "яблоко", "абрикос", "малина", "вишня"];
                        shuffle($arg);
                        foreach($arg as $key=>$value){
                        echo "Ключ к массиву - ". $key ." | Значение массива: ". $value ."<br>";
                        }
                    ?>
                </div> 
                Видим, что список массива поменялся, теперь при обновлении браузера(ctrl+F5), список массива всегда будет изменяться в рандом/случайном порядке.    
            </p>
    </div>
    <div class="step__first">
        <p>
            В данном разделе мы рассмотрели функции для работы с массивом в PHP, которые чаще других используется при написании кода.
        </p>
    </div>
</body>
</html>