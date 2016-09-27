/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('div.alert').not('.alert-important').delay(6000).fadeOut(350);
$(".form-delete").submit(function (event) {
    var x = confirm("Are you sure you want to delete?");
    if (x) {
        return true;
    } else {
        event.preventDefault();
        return false;
    }
});