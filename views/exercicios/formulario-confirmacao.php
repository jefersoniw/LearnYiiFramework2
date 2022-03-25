<?php

?>
<p>Você inseriu as seguintes informações no formulário:</p>

<ul>
  <li><label for="nome"><b>Nome:</b></label> <?= $model->nome ?></li>
  <li><label for="email"><b>Email:</b></label> <?= $model->email ?></li>
  <li><label for="idade"><b>Idade:</b></label> <?= $model->idade ?> anos</li>
</ul>