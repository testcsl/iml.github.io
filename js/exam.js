//class Exam {
    //constructor() {
    let examBox = document.getElementsByClassName("exam")[0];
    let question = examBox.getElementsByClassName("question")[0];
    let question_ques = question.getElementsByClassName("que")[0];
    let option = examBox.getElementsByClassName("option")[0];
    let operate = examBox.getElementsByClassName("operate")[0];
    let se_op = ['A.', 'B.', 'C.', 'D.'];
    let start = 0;
    let qu_len = null;
    _init();
        
        //question.dataset.type;
    //}

    /** 初始化 */
    function _init () {
        //console.log( Exam.start );
        
/*        exa.forEach(element => {
            //console.log(element);
            proExam(element);
        });*/

        let next_b = document.createElement("input");
        next_b.className = "next_bu";
        next_b.type = "button";
        next_b.value = "下一题";
        next_b.disabled = true;

        let sub_b = document.createElement("input");
        sub_b.className = "submit_bu";
        sub_b.type = "submit";
        sub_b.value = "提交";

        next_b.onclick = function () {
            this.disabled = true;
            question_ques.innerHTML = '';
            option.getElementsByClassName("op")[0].innerHTML = '';
            option.getElementsByClassName("meg")[0].innerHTML = '';
            proExam( exa[start] );
            if ( start >= qu_len ) {
                this.disabled = true;
                this.style.cursor = "default";
            }
            sub_b.disabled = false;
            sub_b.style.cursor = "pointer";
        }

        operate.appendChild(sub_b);
        operate.appendChild(next_b);
        
        
        let eexx = ex();
        let exa = [];
        for ( let i = eexx.length - 1; i >= 0; i-- ) {
            let temp = random( 0, i );
            exa.push( eexx[ temp ] );
            eexx.splice( temp, 1 );
        }
        qu_len = exa.length - 1;
        proExam( exa[start] );
        //start += start < qu_len ? 1 : 0;
    }

    function sub ( t_ans ) {
        let sub_b = document.getElementsByClassName("submit_bu")[0];
        //let que = question;
        //let op = option;
        //let p_a = proAns;
        sub_b.onclick = function () {
            document.getElementsByClassName("next_bu")[0].disabled = false;
            this.disabled = true;
            this.style.cursor = "default";
            switch ( question.dataset.type ) {
                case "1":
                    let ans1 = option.getElementsByTagName("input");
                    proAns( 1, ans1, t_ans );
                    //this.disabled = true;
                    for ( let i = 0; i < ans1.length; i++ ) {
                        ans1[i].disabled = true;
                        ans1[i].parentNode.classList.remove("lab");
                        ans1[i].parentNode.style.cursor = "default";
                    }
                    break;
                case "2":
                    let ans2 = option.getElementsByTagName("input");
                    proAns( 2, ans2, t_ans );
                    //this.disabled = true;
                    for ( let i = 0; i < ans2.length; i++ ) {
                        ans2[i].disabled = true;
                        ans2[i].parentNode.classList.remove("lab");
                        ans2[i].parentNode.style.cursor = "default";
                    }
                    break;
                case "5":
                    let ans5 = question.getElementsByClassName("fi_inp");
                    proAns( 5, ans5, t_ans );
                    //this.disabled = true;
                    for ( let i = 0; i < ans5.length; i++ ) {
                        ans5[i].disabled = true;
                        ans5[i].parentNode.classList.remove("lab");
                        ans5[i].parentNode.style.cursor = "default";
                    }
                    break;
                default:
                    break;
            }
        }

        //operate.appendChild(sub_b);
    }
    /** 类型处理 */
    function proExam (obj) {
        //console.log(qu_len);
        if ( start === qu_len || qu_len === 1 ) {
            document.getElementsByClassName("next_bu")[0].disabled = true;
            document.getElementsByClassName("next_bu")[0].style.cursor = "default";
        }
        start = start < qu_len ? start + 1 : start;
        switch (obj.type) {
            case 1:
                Single_cho(obj);
                break;
            case 2:
                Multiple_cho(obj);
                break;
            case 5:
                fill_in(obj);
                break;
            //default:
                //break;
        }
    }
    /** 选项处理 */
    function proSel (option) {
        const op = option.split("|");
        let re = [];
        for ( let i = op.length - 1; i >= 0; i-- ) {
            let temp = random( 0, i );
            re.push( op[ temp ] );
            op.splice( temp, 1 );
        }
        return re;
    }
    /**
     * 答案处理
     * @param {*} type 类型
     * @param {*} ans 回答
     * @param {*} t_ans 正确答案
     */
    function proAns ( type, ans, t_ans ) {
        let sel_ans = [];
        //console.log(op);
        switch (type) {
            case 1:
                for ( let i = 0; i < ans.length; i++ ) {
                    if ( ans[i].checked ) {
                        sel_ans.push( ans[i].value );
                    }
                }
                if ( t_ans === sel_ans.toString() ) {
                    (option.getElementsByClassName("meg")[0]).innerHTML = "正确";
                    if ( start != qu_len ) {
                        setTimeout( () => {
                            document.getElementsByClassName("next_bu")[0].click();
                        }, 1000);
                    }
                } else {
                    (option.getElementsByClassName("meg")[0]).innerHTML = "错误，答案为：" + t_ans;
                }
                //return sel_ans;
                break;
            case 2:
                for ( let i = 0; i < ans.length; i++ ) {
                    if ( ans[i].checked ) {
                        sel_ans.push( ans[i].value );
                    }
                }
                if ( (t_ans.split('|').sort()).toString() === (sel_ans.sort()).toString() ) {
                    (option.getElementsByClassName("meg")[0]).innerHTML = "正确";
                    if ( start != qu_len ) {
                        setTimeout( () => {
                            document.getElementsByClassName("next_bu")[0].click();
                        }, 1000);
                    }
                } else {
                    (option.getElementsByClassName("meg")[0]).innerHTML = "错误，答案为：" + t_ans.split("|").join(";");
                }
                break;
            case 5:
                for ( let i = 0; i < ans.length; i++ ) {
                    //if ( ans[i].checked ) {
                    sel_ans.push( ans[i].value );
                    //}
                }
                if ( (t_ans.split(',').sort()).toString() === (sel_ans.sort()).toString() ) {
                    (option.getElementsByClassName("meg")[0]).innerHTML = "正确";
                    if ( start != qu_len ) {
                        setTimeout( () => {
                            document.getElementsByClassName("next_bu")[0].click();
                        }, 1000);
                    }
                } else {
                    (option.getElementsByClassName("meg")[0]).innerHTML = "错误，答案为：" + t_ans;
                }
                break;
        }
    }
    /** 单选题 */
    function Single_cho ( obj ) {
        question.setAttribute("data-type", 1);
        let re = proSel(obj.ans);
        question_ques.innerHTML = "<p class='p1'>单选题：</p><p class='p2'>" + obj.exam + "</p>";
        //option.innerHTML();

        for ( let i = 0; i < re.length; i++ ) {
            let lab = document.createElement("label");
            lab.classList = "lab";
            let inp = document.createElement("input");
            inp.type = "radio";
            inp.name = "exam";
            inp.value = re[ i ];
            let sel = document.createElement("span");
            sel.appendChild( document.createTextNode( se_op[ i ] ) );
            let f_p = document.createElement("span");
            let tit = document.createTextNode( re[i] );
            f_p.appendChild(tit);
            lab.appendChild(inp);
            lab.appendChild(sel);
            lab.appendChild(f_p);

            (option.getElementsByClassName("op")[0]).appendChild(lab);
        }
        
        sub( obj.t_ans );
        
    }
    /** 多选题 */
    function Multiple_cho ( obj ) {
        question.setAttribute("data-type", 2);
        let re = proSel(obj.ans);
        question_ques.innerHTML = "<p class='p1'>多选题：</p><p class='p2'>" + obj.exam + "</p>";
        //option.innerHTML();

        for ( let i = 0; i < re.length; i++ ) {
            let lab = document.createElement("label");
            lab.classList = "lab";
            let inp = document.createElement("input");
            inp.type = "checkbox";
            inp.name = "exam";
            inp.value = re[ i ];
            let sel = document.createElement("span");
            sel.appendChild( document.createTextNode( se_op[ i ] ) );
            let f_p = document.createElement("span");
            let tit = document.createTextNode( re[i] );
            f_p.appendChild(tit);
            lab.appendChild(inp);
            lab.appendChild(sel);
            lab.appendChild(f_p);

            (option.getElementsByClassName("op")[0]).appendChild(lab);
        }
        
        sub( obj.t_ans );
    }
    /** 填空题 */
    function fill_in ( obj ) {
        question.setAttribute("data-type", 5);

        let ex = obj.exam.split("__");
        question_ques.innerHTML = "<p class='p1'>填空题：</p><p class='p2'>" + ex.join(
            "<span class='inp_sp'><input type='text' class='fi_inp' maxlength='11'></span>"
        ) + "</p><p>";

        sub( obj.t_ans );
    }
    /**
     * 
     * @param {*} lower 最小值
     * @param {*} upper 最大值
     */
    function random ( lower, upper ) {
        return Math.floor( Math.random() * ( upper - lower + 1 ) ) + lower;
    }
//}