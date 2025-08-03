<?php
$listTodoList = [

];
function showTodoList(){
  echo "===TodoList===". PHP_EOL;
  global $listTodoList;
  for ($i=0; $i < count($listTodoList); $i++) { 
    echo $i+1 . " " . $listTodoList[$i] . PHP_EOL;
  }
}

function showMenu() {
  echo PHP_EOL;
  echo "1. Tambah TodoList" . PHP_EOL;
  echo "2. Hapus TodoList" . PHP_EOL;
  $temp = readline("Pilih Menu: ");
  if ($temp==1) {
    addTodoList();
  } elseif ($temp==2) {
    deleteTodoList();
  }
  else {
    exit("Anda Salah Memasukkan Input");

  }
  
}

function addTodoList(){
  echo "x untuk batal" . PHP_EOL;
  $temp = readline("Masukkan TodoListmu: ");
  if ($temp=="x") {
    
  } else {
    global $listTodoList;
    $listTodoList[] = $temp;
  }
  showTodoList();
  showMenu();
}

function deleteTodoList(){
  echo "x untuk batal" . PHP_EOL;
  $temp = readline("Masukkan list Angka yang Mau Dihapus: ");
  if ($temp=="x") {
    
  } else {
    global $listTodoList;
    unset($listTodoList[$temp-1]);
    $listTodoList = array_values($listTodoList);
  }
  showTodoList();
  showMenu();
}

showTodoList();
showMenu();
