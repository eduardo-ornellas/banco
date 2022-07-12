<?php

$contasCorrentes = [
    '070.524.709-00' => [
        'titular' => 'Eduardo',
        'saldo' => 10000
    ],
    '070.524.699-01' => [
        'titular' => 'Thais',
        'saldo' => 30000
    ],
    '123.456.789-00' => [
        'titular' => 'Camila',
        'saldo' => 100000
    ]
];

$contasCorrentes ['000.524.709-00'] = [
    'titular' => 'Anna',
    'saldo' => 2000
];

// função para sacar dinheiro
function sacar($conta, $valorSacado) {
    if ($valorSacado > $conta['saldo']) {
        echo "Você não tem saldo suficiente para sacar, vá trabalhar".PHP_EOL;
    } else {
        $conta['saldo'] -= $valorSacado;
    } return $conta;
} 

// função para depositar dinheiro
function depositar($conta, $valorDepositado) {
        $conta['saldo'] += $valorDepositado;
        return $conta;
    } 

$contasCorrentes['070.524.709-00'] = depositar($contasCorrentes['070.524.709-00'], $valorDepositado = 50000);  // script para depositar dinheiro

// $contasCorrentes['070.524.709-00'] = sacar($contasCorrentes['070.524.709-00'], $valorSacado = 50000);  // script para sacar dinheiro

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . " " . $conta['saldo']. PHP_EOL;
}
