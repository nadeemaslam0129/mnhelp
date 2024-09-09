$(function() {
	rome(inline_cal, {time: false}).on('data', function (value) {
		var formattedDate = moment(value).format('dddd, MMMM D');
		$('#result').text(formattedDate);
		var dateValue = moment(value).format('DD-MM-YYYY');
		var url = '/getdate/' + dateValue;
		$.ajax({
			url:url,
			method: "get",
			data: {
                dateValue: dateValue,
            },
			dataType:"json",
			success: function (data) {
				$('#getdate').html(data.success);
			},
			error: function (data) {
			}
	  });
	});
});
// $(function() {
//     // Initialize the first calendar
//     rome(inline_cal, { time: false }).on('data', function(value) {
//         handleDateSelection(value, '#getdate');
//     });

//     // Initialize the second calendar
//     rome(inline_cal2, { time: false }).on('data', function(value) {
//         handleDateSelection(value, '#getdate2');
//     });

//     function handleDateSelection(value, getDateContainer) {
//         var formattedDate = moment(value).format('dddd, MMMM D');
//         var dateValue = moment(value).format('DD-MM-YYYY');
//         var url = '/getdate/' + dateValue;

//         $.ajax({
//             url: url,
//             method: "get",
//             data: {
//                 dateValue: dateValue,
//             },
//             dataType: "json",
//             success: function(data) {
//                 $(getDateContainer).html(data.success);
//             },
//             error: function(data) {
//                 // Handle the error if needed
//             }
//         });
//     }
// });
