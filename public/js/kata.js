/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//bmi();


function bmi(weight, height) {

    var diagnosis = '';
    var bodyMassIndex = Number(Number(weight) / Math.pow(height, 2)).toFixed(1);

    if (bodyMassIndex <= 18.5) {
        diagnosis = 'Underweight';
    } else if (bodyMassIndex > 18.5 & bodyMassIndex <= 25.0) {
        diagnosis = 'Normal';
    } else if (bodyMassIndex > 25.0 & bodyMassIndex <= 30.0) {
        diagnosis = 'Overweight';
    } else if (bodyMassIndex > 30.0) {
        diagnosis = 'Obese';
    }

    return diagnosis;

}