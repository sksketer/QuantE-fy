import React,{Component} from 'react';
import '../../css/Topics/topic.css';

const Divisibility = () => {
    return (
        <div className="main-heading">
            <h2>Divisibility</h2>
            <h4><p>Quick Revision</p></h4>
                    <div className="tips">
                        <p className="def"><b>Principal(P) : </b>The money borrowed or lent out for a certain time.</p>
                        <p className="def"><b>Simple Interest(S.I.) : </b>Extra money paid with bprrowed money.</p>
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
                        <br></br>at the end of four years how much interest Suresh has to pay along with principal amount?</b><br></br>
                        <b>Sol : </b> Applying formula  S.I.=(P*R*T)/100 <br></br> S.I.= (36000*6*6)/100 = 12960 </p><br></br>

                        <p className="def"><b> 2) If A lends Rs. 4500 to B at 8% per annum and B lends the same sum to C at 10% per annum, find the gain of B in a period of 3 years.</b><br></br>
                        <b>Sol.</b> Applying formula S.I. = (P*R*T)/100 <br></br> B's gain = (P*R1*T)/100 - (P*R2*T)/100 <br></br>(4500*10*3)/100 - (4500*8*3)/100<br></br>1350 - 1080 = 270.<br></br></p><br></br>

                        
                        
                          
                    </div>
        </div>

    )
}

export default Divisibility;