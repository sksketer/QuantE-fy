import React,{Component} from 'react';
import '../../css/Topics/topic.css';

const SimpleInterest = () => {
    return (
            <div className="main-heading">
                    <h2>Simple Interest</h2>
                    <h4><p>Quick Revision</p></h4>
                    <div className="tips">
                        <p className="def"><b>Principal(P) : </b>The money borrowed or lent out for a certain time.</p>
                        <p className="def"><b>Simple Interest(S.I.) : </b>Extra money paid with borrowed money.</p>
                        <p className="def"><b> Rate(R%): </b>Rate of interest per annum.</p>
                        <p className="def"><b>Time(t) : </b> money borrowed for the time period .</p>
                        <h4 className="heading">Basic Formula</h4>
                        <p className="def"><b>Simple Interest = (P*R*T)/100</b></p>
                        <p className="def"><b>Time = (S.I.*100)/(P*R) </b></p>
                        <p className="def"><b>Rate = (S.I. * 100)/(P*T)</b></p>
                        <p className="def"><b>Principal = (S.I. * 100)/(R*T) </b></p>
                        <p className="def"><b>Amount = Principal + Simple Interest</b></p>
                        <p className="def"><b>Principal = (A*100)/(100+R*T)</b>(When amount is given..)</p>
                        <h2><p><u> Questions for practice</u></p><br></br></h2> 
                        <p className="def"><b>1) If Suresh borrows Rs. 36000 from Mahesh at rate of interest 6% S.I,
                        <br></br> at the end of four years how much interest Suresh has to pay along with principal amount?</b><br></br>
                        <b>Sol : </b> Applying formula  S.I.=(P*R*T)/100 <br></br> S.I.= (36000*6*6)/100 = 12960 </p><br></br>
                        <p className="def"><b> 2) If A lends Rs. 4500 to B at 8% per annum and B lends the same sum to C at 10% per annum, find the gain of B in a period of 3 years.</b><br></br>
                        <b>Sol.</b> Applying formula S.I. = (P*R*T)/100 <br></br> B's gain = (P*R1*T)/100 - (P*R2*T)/100 <br></br> (4500*10*3)/100 - (4500*8*3)/100 <br></br>1350 - 1080 = 270.</p><br></br>
                        <p className="def"><b> 3)In how many years the simple interest on rs. 6000 at 10% rate of interest will become rs. 1800?</b><br></br> 
                        <b>Sol.</b> Applying formula  T = (S.I.*100)/(P*R) <br></br>T = (1800*100)/(6000*10) = 3 </p><br></br>
                        <p className="def"><b> 4)Sohan has borrowed rs.5000 at the rate of 6% S.I. what amount he needs to pay after 3 years to clear the debt ?</b> <br></br>
                        <b>Sol.</b> Aplying formula  Amount = Principal + Simple Interest <br></br> S.I. = (5000*6*3)/100 = 900 <br></br> Amount = 5000 + 900 = 5900 </p><br></br>
                        <p className="def"><b> 5) In what time rs.6000 will give interest of rs.720 at the rate of 6% per annum S.I.?</b><br></br>
                        <b>sol.</b> Applying formula T = (S.I.*100)/(P*R) <br></br> T = (720*100)/(6000*6) = 2 </p> <br></br>
                        <p className="def"><b> 6) A sum invested at the rate of interest 5% S.I. grows to rs.5400 in 4 years . The same amount in 3 years at the rate of 10% per annum S.I. will grow to ? </b> <br></br>
                        <b>sol.</b> Applying formula Amount = Principal + Simple Interest <br></br> 5400 = P*(1+(5*4)/100) = 4500 <br></br> Required Amount = p*(1+(R*T)/100)<br></br> Amount = 4500(1+(10*3)/100) = 5850</p><br></br>
                        <p className="def"><b> 7) A sum of money at simple interest becomes rs.3000 in 2 years and rs.3540 in 5 years.find the rate of interest.</b><br></br>
                        <b>sol.</b> Applying formula Amount = Principal + Interest <br></br> Interest = 3540 - 3000 = 540 <br></br> R = (S.I.*100)/(P*T) <br></br>R = (540*100)/(3000*3) = 6%</p><br></br>
                        <p className="def"><b> 8) A moneylender charges rs.180 as simple interest on a sum of rs.600 for four months . What is the rate of interest per annum? </b><br></br>
                        <b>Sol.</b> Applying formula R = (S.I.*100)/(P*T)<br></br> Time = 4/12 = 1/3 <br></br> R = (180*100)/(6*1/3) = 90%</p><br></br> 
                        <p className="def"><b> 9) A sum of money amount to 3300 in 2 years and rs.3600 in 5 years. What is the principal amount?</b><br></br>
                        <b>Sol.</b> Simple Interest for 3 years = 3600-3300 = 300 <br></br> S.I. for one year = 300/3 = 100 <br></br>S.I. for two years 100*2 = 200 <br></br>Principal = 3300-200 = 3100</p><br></br>
                        <p className="def"><b> 10) An agent allows a rebate of 4% to an investor while the bank pays an interest of 14% on the investment .What is the actual rate of interest earned by the investor on his investement?</b><br></br>
                        <b>Sol.</b> Let the investor invests rs 100 <br></br> rebate given = 4% <br></br> so the actual investment = 100-4= 96 <br></br> Therefore the required rate of interest = ((114-96)/96)*100 = 18.75%</p><br></br>
                          
                    </div>
            </div>
 
    )
}

export default SimpleInterest;