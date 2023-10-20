<?php

/**
 * Essa classe possui o metodo getQtdeNotas ele não está completo e cabe a você concluí-lo de acordo com os requisitos.
 */
class ChangeMoney
{
    /**
     * Dado um valor em reais, retorna a quantidade de notas necessárias para formar o troco.
     * @param float $reais
     * @return array
     */
    public function getQtdMoneyNotes(float $amount): array
    {
        $notes_qtd = [
            "100" => 0,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0,
            "2" => 0,
            "1" => 0,
            "0.5" => 0,
            "0.25" => 0,
            "0.1" => 0,
            "0.05" => 0,
            "0.01" => 0,
        ];

        
        foreach ($notes_qtd as $chave => $valor) {
            
            if($amount == 0)
                break;
            
            $amount_note = floatval($chave);
            $note_qtd = (int) round($amount / $amount_note);
            $rest = $amount-($note_qtd*$amount_note);
            
            if($rest < 0)
                continue;

            $notes_qtd[$chave] = $note_qtd;
            $amount = $rest;
        }


        return $notes_qtd;
    }

   
}