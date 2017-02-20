 $(document).ready(function() {
    var msg="";
    var elements = document.getElementsByTagName("INPUT");

    for (var i = 0; i < elements.length; i++) {
       elements[i].oninvalid =function(e) {
            if (!e.target.validity.valid) {
                switch(e.target.id) {
                    case 'txtName' : 
                        e.target.setCustomValidity("Please input category name"); break;
                    case 'txtOrder' : 
                        e.target.setCustomValidity("Please input order"); break;
                    case 'txtKeyWords':
                        e.target.setCustomValidity("Please input keywords"); break;
                    case 'txtDes':
                        e.target.setCustomvalidity("Please input description"); break;
                    default : e.target.setCustomValidity("");break;
                }
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity(msg);
        };
    } 
});