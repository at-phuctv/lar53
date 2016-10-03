/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    $('#category-table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        order: [0, "desc"],
        ajax: {
            url: 'datatables/category',
        },
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'introduce', name: 'introduce'},
            {data: 'image', name: 'image', 'orderable': false},
            {data: 'edit', name: 'edit', 'orderable': false}
        ]
    });
});