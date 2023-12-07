$(document).ready(function () {
    var rowCounter = 1;

    // Add More Button Click Event
    $(".add_row_btn").on("click", function () {
        var clone = $("#add_medicine").clone();

        // Update label for the cloned row
        clone.find('label.label').text('Table ' + (++rowCounter));

        // Clear only the table label input value
        clone.find("label.label input").val("");

        // Add Remove button to the cloned row with red color
        clone.find(".add_row_btn")
            .removeClass("add_row_btn")
            .addClass("remove_row_btn btn1 btn-danger")
            .text("Remove");

        clone.appendTo(".wrapper");
    });

    // Remove Row Button Click Event
    $(".wrapper").on("click", ".remove_row_btn", function () {
        $(this).closest(".row").remove();
        updateLabels(); // Update labels after removing a row
    });

    // Function to update labels when rows are removed
    function updateLabels() {
        $(".wrapper .row").each(function (index) {
            $(this).find('label.label').text('Table ' + (index + 1));
        });
    }
});