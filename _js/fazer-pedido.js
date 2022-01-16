function calc_total() {
    var prato = document.getElementById('cprato').value;
    var qtd = parseInt(document.getElementById('cqtd').value);

    if (prato == "chocolate") {
        tot = qtd * 160;
    }
        else if (prato == "casal") {
            tot = qtd * 180;
        } 
            else if (prato == "papai") {
                tot = qtd * 180;
            } 
                else if (prato == "mamãe") {
                    tot = qtd * 180;
                } 
                    else if (prato == "aniversario") {
                        tot = qtd * 180;
                    } 
                        else if (prato == "namorados") {
                            tot = qtd * 180;
                        } 
                            else {
                                tot = 0;
                            }
    document.getElementById('ctot').value = tot;
}