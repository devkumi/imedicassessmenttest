<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<script src="<?php echo base_url() ?>asserts/js/app.js"></script>
<!-- <script src="<?php echo base_url() ?>asserts/js/city_state.js"></script> -->

<!--     
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

<script>
// $(function() {
//     // Line chart
//     new Chart(document.getElementById("chartjs-dashboard-line"), {
//         type: 'line',
//         data: {
//             labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
//                 "Dec"
//             ],
//             datasets: [{
//                     label: "Orders",
//                     fill: true,
//                     backgroundColor: window.theme.primary,
//                     borderColor: window.theme.primary,
//                     borderWidth: 2,
//                     data: [3, 2, 3, 5, 6, 5, 4, 6, 9, 10, 8, 9]
//                 },
//                 {
//                     label: "Sales ($)",
//                     fill: true,
//                     backgroundColor: "rgba(0, 0, 0, 0.05)",
//                     borderColor: "rgba(0, 0, 0, 0.05)",
//                     borderWidth: 2,
//                     data: [5, 4, 10, 15, 16, 12, 10, 13, 20, 22, 18, 20]
//                 }
//             ]
//         },
//         options: {
//             maintainAspectRatio: false,
//             legend: {
//                 display: false
//             },
//             tooltips: {
//                 intersect: false
//             },
//             hover: {
//                 intersect: true
//             },
//             plugins: {
//                 filler: {
//                     propagate: false
//                 }
//             },
//             elements: {
//                 point: {
//                     radius: 0
//                 }
//             },
//             scales: {
//                 xAxes: [{
//                     reverse: true,
//                     gridLines: {
//                         color: "rgba(0,0,0,0.0)"
//                     }
//                 }],
//                 yAxes: [{
//                     ticks: {
//                         stepSize: 5
//                     },
//                     display: true,
//                     gridLines: {
//                         color: "rgba(0,0,0,0)",
//                         fontColor: "#fff"
//                     }
//                 }]
//             }
//         }
//     });
// });
</script>
<script>
$(function() {
    // Pie chart
    new Chart(document.getElementById("chartjs-dashboard-pie"), {
        type: 'pie',
        data: {
            labels: ["Chrome", "Firefox", "IE", "Other"],
            datasets: [{
                data: [4401, 4003, 1589],
                backgroundColor: [
                    window.theme.primary,
                    window.theme.warning,
                    window.theme.danger,
                    "#E8EAED"
                ],
                borderColor: "transparent"
            }]
        },
        options: {
            responsive: !window.MSInputMethodContext,
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            cutoutPercentage: 75
        }
    });
});
</script>
<script>
$(function() {
    // Bar chart
    new Chart(document.getElementById("chartjs-dashboard-bar"), {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                "Dec"
            ],
            datasets: [{
                label: "This year",
                backgroundColor: window.theme.primary,
                borderColor: window.theme.primary,
                hoverBackgroundColor: window.theme.primary,
                hoverBorderColor: window.theme.primary,
                data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                barPercentage: .75,
                categoryPercentage: .5
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: false
                    },
                    stacked: false,
                    ticks: {
                        stepSize: 20
                    }
                }],
                xAxes: [{
                    stacked: false,
                    gridLines: {
                        color: "transparent"
                    }
                }]
            }
        }
    });
});
</script>
<script>
$(function() {
    var mapData = {
        "US": 298,
        "SA": 200,
        "DE": 220,
        "FR": 540,
        "CN": 120,
        "AU": 760,
        "BR": 550,
        "IN": 200,
        "GB": 120,
    };
    $('#world_map').vectorMap({
        map: 'world_mill',
        backgroundColor: "transparent",
        zoomOnScroll: false,
        regionStyle: {
            initial: {
                fill: '#e4e4e4',
                "fill-opacity": 0.9,
                stroke: 'none',
                "stroke-width": 0,
                "stroke-opacity": 0
            }
        },
        series: {
            regions: [{
                values: mapData,
                scale: [window.theme.primary],
                normalizeFunction: 'polynomial'
            }]
        },
    });
    setTimeout(function() {
        $(window).trigger('resize');
    }, 350)
})
</script>
<script>
$(function() {
    $('#datatables-dashboard-projects').DataTable({
        pageLength: 6,
        lengthChange: false,
        bFilter: false,
        autoWidth: false
    });
});
</script>
<script>
$(function() {
    $('#datetimepicker-dashboard').datetimepicker({
        inline: true,
        sideBySide: false,
        format: 'L'
    });
});
</script>



<script>
$(function() {
    // Initialize Select2 select box
    $("select[name=\"validation-select2\"]").select2({
        allowClear: true,
        placeholder: "Select gear...",
    }).change(function() {
        $(this).valid();
    });
    // Initialize Select2 multiselect box
    $("select[name=\"validation-select2-multi\"]").select2({
        placeholder: "Select gear...",
    }).change(function() {
        $(this).valid();
    });
    // Trigger validation on tagsinput change
    $("input[name=\"validation-bs-tagsinput\"]").on("itemAdded itemRemoved", function() {
        $(this).valid();
    });
    // Initialize validation
    $("#validation-form").validate({
        ignore: ".ignore, .select2-input",
        focusInvalid: false,
        rules: {
            "validation-email": {
                required: true,
                email: true
            },
            "validation-username": {
                required: true
            },
            "content": {
                required: true
            },
            "validation-responseId": {
                required: true
            },
            "validation-number": {
                required: true
            },
            "validation-authcode": {
                required: true,
                minlength: 4,
                maxlength: 4
            },
            "validation-old-password": {
                required: true,
                minlength: 4,
                maxlength: 20
            },
            "validation-password": {
                required: true,
                minlength: 4,
                maxlength: 20
            },
            "validation-password-confirmation": {
                required: true,
                minlength: 4,
                equalTo: "input[name=\"validation-password\"]"
            },
            "validation-required": {
                required: true
            },
            "validation-url": {
                required: true,
                url: true
            },
            "validation-select": {
                required: true
            },
            "validation-multiselect": {
                required: true,
                minlength: 2
            },
            "validation-select2": {
                required: true
            },
            "validation-select2-multi": {
                required: true,
                minlength: 2
            },
            "validation-text": {
                required: true
            },
            "validation-file": {
                required: true
            },
            "validation-radios": {
                required: true
            },
            "validation-radios-custom": {
                required: true
            },
            "validation-checkbox": {
                required: true
            },
            "validation-checkbox-custom": {
                required: true
            },
            "validation-checkbox-group-1": {
                require_from_group: [1,
                    "input[name=\"validation-checkbox-group-1\"], input[name=\"validation-checkbox-group-2\"]"
                ]
            },
            "validation-checkbox-group-2": {
                require_from_group: [1,
                    "input[name=\"validation-checkbox-group-1\"], input[name=\"validation-checkbox-group-2\"]"
                ]
            },
            "validation-checkbox-custom-group-1": {
                require_from_group: [1,
                    "input[name=\"validation-checkbox-custom-group-1\"], input[name=\"validation-checkbox-custom-group-2\"]"
                ]
            },
            "validation-checkbox-custom-group-2": {
                require_from_group: [1,
                    "input[name=\"validation-checkbox-custom-group-1\"], input[name=\"validation-checkbox-custom-group-2\"]"
                ]
            }
        },
        // Errors
        errorPlacement: function errorPlacement(error, element) {
            var $parent = $(element).parents(".form-group");
            // Do not duplicate errors
            if ($parent.find(".jquery-validation-error").length) {
                return;
            }
            $parent.append(
                error.addClass("jquery-validation-error small form-text invalid-feedback")
            );
        },
        highlight: function(element) {
            var $el = $(element);
            var $parent = $el.parents(".form-group");
            $el.addClass("is-invalid");
            // Select2 and Tagsinput
            if ($el.hasClass("select2-hidden-accessible") || $el.attr("data-role") ===
                "tagsinput") {
                $el.parent().addClass("is-invalid");
            }
        },
        unhighlight: function(element) {
            $(element).parents(".form-group").find(".is-invalid").removeClass("is-invalid");
        }
    });
});
</script>