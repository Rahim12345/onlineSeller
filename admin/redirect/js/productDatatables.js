$('#products').DataTable({
  pageLength:10,
  lengthMenu: [
      [10,25,50,75,100],
      ['10 ədəd','25 ədəd','50 ədəd','75 ədəd','100 ədəd']
    ],
  order: [
    [ 0, 'asc' ], [ 1, 'asc' ], [ 2, 'asc' ], [ 3, 'asc' ], [ 4, 'asc' ], [ 5, 'asc' ], [ 6, 'asc' ], [ 7, 'asc' ], [ 8, 'asc' ]
  ],
  columnDefs:[
    {
      targets:[0,1,2,3,4,5,6,7,8],
      orderable:true
    }
  ],
  language: {
    "sEmptyTable":     "Cədvəldə heç bir məlumat yoxdur",
    "sInfo":           " _TOTAL_ Nəticədən _START_ - _END_ Arası Nəticələr",
    "sInfoEmpty":      "Nəticə Yoxdur",
    "sInfoFiltered":   "( _MAX_ Nəticə İçindən Tapılanlar)",
    "sInfoPostFix":    "",
    "sInfoThousands":  ",",
    "sLengthMenu":     "Səhifədə _MENU_ Nəticə Göstər",
    "sLoadingRecords": "<div class=\"lds-ripple\"><div></div><div></div></div>",
    "sProcessing":     "Gözləyin...",
    "sSearch":         "Axtarış:",
    "sZeroRecords":    "Nəticə Tapılmadı.",
    "oPaginate": {
        "sFirst":    "İlk",
        "sLast":     "Axırıncı",
        "sNext":     "Sonraki",
        "sPrevious": "Öncəki"
    },
    "oAria": {
        "sSortAscending":  ": sütunu artma sırası üzərə aktiv etmək",
        "sSortDescending": ": sütunu azalma sırası üzərə aktiv etmək"
    }
  },
  prosessing:true,
  serverSide:true,
  ajax:{
    url:'api.php',
    type:'POST'
  },
  columns:[
    {data:'say'},
    {data:'manufacturer'},
    {data:'productName'},
    {data:'Price'},
    {data:'endirim'},
    {data:'colors'},
    {data:'about'},
    {data:'categoryID'},
    {data:'id'}
  ],
  dom: '<"bottom"lBf>rt<"bottom"ip><"clear">',
  buttons: {
        buttons: [ 
          'copy', 
          {
            extend:'pdf',
            title:'Məhsullar',
            customize:function(doc){
              Array(doc.content[1].table.body[0].length+1).join('*').split('');
            },
            exportOptions:{
              columns:[0,1,2,3,4,5,6]
            }
          },
          'csv', 
          {
            extend:'excel',
            title:'Məhsullar',
            exportOptions:{
              columns:[0,1,2,3,4,5,6]
            }
          }
        ]
    } 
});