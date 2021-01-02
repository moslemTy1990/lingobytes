$(document).ready(function () {
    var type = {
        text: "text",
        multiple: "multiple",
        voice: "voice"
    }
    /*
    * get the elements by id and check the default value, also get the if of the div to add your code
    */
    const selectElement = $("select#type");
    const defaultType = selectElement.val();
    const elementsToAdd = $("div#htmlForQtype");
        /*
     * conditions based on the default value of the select element
    */
    switch (defaultType) {
        case type.multiple:
             elementsToAdd.html(htmlForMultiple())
            break;
        case type.voice:
            elementsToAdd.html(htmlForVoice())
            break;
        default:
            elementsToAdd.html("")
            break;
    }

    /*
    * conditions based on the change even on the values of the select
    */
    selectElement.on('change', function () {
        switch (this.value) {
            case type.multiple:
                elementsToAdd.html(htmlForMultiple())
                break;
            case type.voice:
                elementsToAdd.html(htmlForVoice())
                break;
            default:
                elementsToAdd.html("")
                break;
        }
    })

    function htmlForVoice(){
        return "     <div class=\"col-md-12\">\n" +
            "\n" +
            "                            <div class=\"form-group\">\n" +
            "                             <label for=\"voiceInput\">Voice file</label>\n" +
            "                                <div class=\"custom-file\">\n" +
            "                                    <input type=\"file\" class=\"custom-file-input\" id=\"voiceInput\" name=\"voiceInput\">\n" +
            "                                    <label class=\"custom-file-label\" for=\"voiceInput\">Choose Voice File</label>\n" +
            "                                </div>\n" +
            "                            </div>\n" +
            "\n" +
            "                        </div>"
    }

    $(document).on('click','#addOptions' , function (){
        var multipleOptionsTextBox = $("input#multipleOptionsTextBox");
        if (multipleOptionsTextBox.val().trim()!==''){
            $("ul#multipleOptions").append("<li>\n" +
                "                                            <div class=\"bg-light text-lg\">\n" +
                "                                                <input type=\"hidden\" value=\""+multipleOptionsTextBox.val()+"\" name=\"value[]\">\n" +
                "                                                <label for=\"todoCheck1\">" + multipleOptionsTextBox.val() + "</label>\n" +
                "                                            <div class=\"tools\" id=\"deleteItem\">\n" +
                "                                                <i class=\"fas fa-trash\" ></i>\n" +
                "                                            </div>\n" +
                "                                            </div>\n" +

                "                                        </li>");

            multipleOptionsTextBox.val("")
            multipleOptionsTextBox.focus();
            }else{
            alert('You are inserting empty string')
        }
    })
    $(document).on( 'click', '#deleteItem', function(){
        $(this).parent().parent().remove()
    } );





    function htmlForMultiple(){
        return "  <section class=\"col-md-12\">\n" +
            "                            <!-- Choice list -->\n" +
            "                            <div class=\"card\">\n" +
            "                                <div class=\"card-header\">\n" +
            "                                    <h3 class=\"card-title\">\n" +
            "                                        <i class=\"ion ion-clipboard mr-1\"></i>\n" +
            "                                        Choices\n" +
            "                                    </h3>\n" +
            "                                </div>\n" +
            "                                <!-- /.card-header -->\n" +
            "                                <div class=\"card-body\">\n" +
            "                                    <ul class=\"todo-list\" id=\"multipleOptions\">\n" +
            "                                    </ul>\n" +
            "                                </div>\n" +
            "                                <!-- /.card-body -->\n" +
            "                                    <div class=\"input-group input-group-lg\">\n" +
            "                                        <input type=\"text\" class=\"form-control\" id=\"multipleOptionsTextBox\" placeholder=\"Type your Options and added to the list here \" autofocus>\n" +
            "                                        <span class=\"input-group-append\">\n" +
            "                                            <button type=\"button\" class=\"btn btn-success\" id=\"addOptions\">Add Options!</button>\n" +
            "                                        </span>\n" +
            "                                    </div>\n" +
            "                            </div>\n" +
            "                            <!-- /.card -->\n" +
            "                        </section>"
    }


});
