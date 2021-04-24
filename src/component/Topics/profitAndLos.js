import React,{Component} from 'react';
import '../../css/Topics/topic.css';

const ProfitAndLoss = () => {
    return (
            <div className="main-heading">
                   <h2>Profit And Loss</h2>
                    <h4><p>Quick Revision</p></h4>
                    <div className="tips">
                        <p className="def"><b>C.P.= Cost Price</b></p>
                        <p className="def"><b>S.P.= Selling Price</b></p>
                        <p className="def"><b>M.P.= Marked Price</b></p>
                        <p className="def"><b>D = Discount</b></p>
                        <p className="def"><b>S.P. is greater than C.P. = Profit in the sale.</b></p > 
                        <p className="def"><b>S.P. is less than C.P. = Loss in the sale.</b></p > 
                        <p className="def"><b>S.P. is equals to C.P. = No profit at all.</b></p > 
                        <h4 className="heading">Basic Formula</h4>
                        <p className="def"><b>Total Profit =  S.P.-C.P. </b></p>
                        <p className="def"><b>Total Loss = C.P.-S.P.</b></p > 

                        <p className="def"><b>%Profit = (Total Profit * 100)/C.P. </b></p>
                        <p className="def"><b>%Loss = (Total Loss * 100)/C.P.</b></p>
                        <p className="def"><b>S.P. = (C.P.*(100 - %Loss))/100</b></p>
                        <p className="def"><b>S.P. = (C.P.*(100 + %Profit)) /100</b></p>
                        <p className="def"><b>C.P. = (S.P. * 100)/(100 - %Loss)</b></p>
                        <p className="def"><b>C.P. = (S.P. * 100)/(100 + %Profit)</b></p >
                        <p className="def"><b>Discount = Marked Price - Selling Price</b></p >
                        <p className="def"><b>%Discount = (Discount * 100)/M.P.</b></p > 
                        <p className="def"><b>Note : </b><br></br> Marked Price is also known as Printed Price or Listed Price..</p > 
                        <h2><p><u> Questions for practice</u></p><br></br></h2>
                        <p className="def"><b> 1) A shopkeeper sold an article for rs.2500. if the cost price of the article is 2000. find the profit %.</b><br></br>
                        <b>Sol.</b> C.P. = 2000 <br></br> S.P. = 2500<br></br> profit = 2500-2000 = 500 <br></br> Apply formula P% = (Profit*100)/C.P. <br></br> P% = (500*100)/2000 = 25%</p><br></br>
                        <p className="def"><b> 2) A man purchases a TV for rs.8000 and sells it at 10% loss.What is the selling price of TV.</b><br></br>
                        <b>Sol.</b> C.P. of TV = 8000 <br></br>Loss% = 10% <br></br>Applying formula S.P. = ((100-Loss%)/C.P.)*100 <br></br>S.P. = (90*8000)/100 = 7200</p><br></br>
                        <p className="def"><b> 3) Ramesh bought a chair for rs.1540 and sold it to suresh.if Ramesh earned a profit of 25%,find the selling price of chair.</b><br></br>
                        <b>Sol.</b> C.P. of chair = 1540 <br></br>Profit% = 25%<br></br>Applying formula S.P. = ((100+Profit%)/100)*C.P.<br></br> S.P. = (125*1540)/100 = 1925 </p><br></br>
                        <p className="def"><b> 4) A shopkeeper purchases a table and sells it for rs.4200.if he incurs a loss pf 20%,find the cost price of table.</b><br></br>
                        <b>Sol.</b> S.P. of table = 4200 <br></br>Loss% = 20% <br></br>Applying formula C.P. = (100/(100-Loss%))*4200 <br></br>C.P. = (100*4200)/80 = 5250</p><br></br>
                        <p className="def"><b> 5) Suresh bought a cell phone from a shop .if hen sells it at rs.8400 to mahesh and earns a profit of 12%,find the price at which suresh bought the cell phone.</b><br></br>
                        <b>Sol.</b> S.P. of the cell phone = 8400 <br></br>profit% = 12% <br></br>Applying formula C.P. = (100/(100+Profit%))*S.P. <br></br>C.P. = (100*8400)/112 = 7500 </p><br></br>
                        <p className="def"><b> 6) A shopkeeper bought a watch for rs.1200. At what price should he sell the watch to earn a profit of 25%?</b><br></br>
                        <b>Sol.</b> C.P. ofthe watch = 1200 <br></br>Profit% = 25% <br></br>Applying formula S.P. = ((100+Profit%)/100)*C.P. <br></br>S.P.  = (125*1200)/100 = 1500</p><br></br>
                        <p className="def"><b> 7) Mohan bought an article at 25% less of the marked price and sold it at 15% more than the marked price. Find the profit earned by him.</b><br></br>
                        <b>Sol.</b> Let the marked price be rs.100 <br></br>C.P. = 100-25= 75 <br></br>S.P. = 100+15 = 115 <br></br>profit = S.P.-C.P. = 115-75 = 40 <br></br>Profit% = (Profit*100)/C.P. <br></br>(40*100)/75 = 53.3%</p><br></br>
                        <p className="def"><b> 8) If the cost price of 120 mangoes is equal to the selling price of 100 mangoes ,what is the profit percent in the transction? </b><br></br>
                        <b>Sol.</b> Let the cost price pf 120 mangoes be rs.120 <br></br>As per the question S.P. of 120 mangoes = rs.120 <br></br>C.P. of 100 mangoes would be =100 <br></br>Profit=120-100 = 20 <br></br>Profit% = (Profit*100)/100 <br></br>Profit% = (20*100)/100 = 20%</p><br></br>
                        <p className="def"><b> 9) After selling 140 apples a fruit seller earns  a profit equal to S.P. of 20 apples.his profit percentage is . </b><br></br>
                        <b>Sol.</b> Let the selling price of 140 apples = 140 <br></br>Profit = 20 <br></br>C.P. = S.P.-Profit <br></br>C.P. = 140-20 = 120 <br></br>Profit% = (Profit*100)/C.P. <br></br>Profit% = (20*100)/120 = 16.7%</p><br></br>
                        <p className="def"><b> 10) The cost price of 30 articles is equal to the selling price of 25 articles .What is the profit percentage in this transaction?</b><br></br>
                        <b>Sol.</b> Let the cost price of each article be rs.1 <br></br>then C.P. of 25 articles = 25 <br></br>S.P. of 25 articles = C.P.of 30 articles = 30 <br></br>Profit  = 30-25 = 5 <br></br>Profit% = (Profit*100)/C.P. <br></br>Profit% = (5*100)/25 = 20%</p><br></br>
                    
                    </div>
            </div>

    )
}

export default ProfitAndLoss;