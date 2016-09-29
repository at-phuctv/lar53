/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    $.extend($.fn.dataTable.defaults, {
        buttons: ['copy', 'csv', 'excel']
    });
    $('#category-table').DataTable({
        order: [0, "desc"],
        ajax: {
            url: 'datatables/category',
        },
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'introduce', name: 'introduce'},
            {data: 'image', name: 'image', "render": function (data, type, row) {
                    return '<img src="' + data + ' " width="100px" />';
                }},
            {data: 'edit', name: 'edit'},
            {data: 'remove', name: 'remove'},
        ]
    });
});