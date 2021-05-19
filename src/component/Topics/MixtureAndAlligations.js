import React,{Component} from 'react';
import '../../css/Topics/topic.css';

const MixtureAndAlligations = () => {
    return (
            <div className="main-heading">      
                    <h1>Alligation And Mixture</h1><br></br>
                    <h2><p><u>Quick Revision</u></p></h2><br></br>
                    <div className="tips">
                        <p className="def"><b>Alligation: </b>It refers to a rule that helps to find theratio in which two or more ingredients at a given price are mixed to produce a mixture of specified price </p>
                        <p className="def"><b>Mean price: </b>It is the cost price of a unit quantity of a mixture
                         which is prepared by mixing two or more ingredients </p>
                        <p className="def"><b>Alligation rule: </b> It says that if two ingredients at a given price are mixed to produce 
                        a mixture at the given price, the ratio of quantity of cheaper ingredient and quantity of dearer ingredient is given by: </p>
                        <p className="def"><b>Quantity of cheaper/Quantity of dearer</b>cost price of dearer - mean price/
                        mean price - cost price of cheaper </p><br></br>
                        
                        <h2><p><u> Questions for practise</u></p><br></br></h2> 
                        
                        <p className="def"><b> Q.1</b><b>A 60 liter mixture of milk and water contains 10% water.
                         How much water must be added to make water 20% in the mixture?</b><br></br> <br></br>
                        <b>Sol.</b>the mixture has 10% water, so the milk would be 90% of 60 liters.<br>
                        Milk = 90/100 * 60 = 54 liters </br><br>Water = 60 - 54=6 liters </br>
                        <br> Let water to be added = x liters </br><br>Now, (6+x/60+x)*100=20</br>
                        <br>6+x/60+x=1/5</br><br>30+5x=60+x</br><br>30-60 = x-5x</br><br>-30=-40x</br><br>x=30/4=7.5 liters</br> </p><br></br>

                        <p className="def"><b> Q.2</b> <b>An alloy contains14 parts of tin and 100 parts of copper.
                         What is the percentage of tin in the alloy ?</b> <br></br><br></br> 
                        <b>Sol.</b>In 114 parts of alloy, tin = 14 parts<br>∴Percentage of tin = 14/114*100=12.3% </br></p><br></br>
                        
                        <p className="def"><b> Q.3</b> <b>A 20 liter mixture contains 30% alcohol and 70% water. If 5 liters of water is added to the mixture,
                         what will be the percentage of alcohol in the new mixture ?</b> <br></br><br></br> 
                        <b>Sol.</b>Initially, the mixture contains 30% alcohol =  30/100 ∗20=6 liters of alchol<br>And, 70% of water =  70/100 ∗20=14 liters of water</br>
                        <br>After adding 5 liters of water, the mixture contains (14+5) 19 liters of water and 6 liters of alcohol.</br><br>∴Percentage of alcohol = 6/25 ∗100=24%</br></p><br></br>

                        <p className="def"><b> Q.4</b> <b> In what ratio water must be mixed with milk costing Rs. 48 per liter to get a mixture worth Rs. 32 per liter ?</b> <br></br><br></br> 
                        <b>Sol.</b> Water/milk = 16/32 = 1/2<br>Required ratio; water:milk = 1:2</br></p><br></br>

                        <p className="def"><b> Q.5</b> <b>A shopkeeper mixes 60 kg of sugar worth Rs. 30 per kg with 90 kg of sugar worth Rs. 40 per kg.
                         At what rate he must sell the mixture to gain 20%?</b> <br></br><br></br> 
                        <b>Sol.</b>Total cost price of (60+90)150 kg of mixture = (60*30+90*40)<br>= 1800+3600</br><br>= Rs. 5400</br>
                        <br>Cost Price per kg of mixture = 5400/150 = Rs. 36 per kg</br><br>Now, Required gain = 20%</br>
                        <br>∴Required selling price per kg of mixture = 120/100 ∗36 = Rs. 43.2 per kg</br></p><br></br>

                        <p className="def"><b> Q.6</b> <b>700 ml of a mixture contains water and milk in the ratio 2:8.
                         How much water must be added to the mixture so that the ratio of water and milk becomes 3:8?</b> <br></br><br></br> 
                        <b>Sol.</b>Milk in the 700 ml of mixture = 700 ∗ 8/10 =560ml<br>So, water in the mixture would be = 700 - 560 = 140 ml</br>
                        <br>Let water to be added = x ml</br><br>Now, 140+x/560 = 3/8</br><br>1120+8x = 1680</br><br>8x = 1680 - 1120</br><br>8x= 560</br><br>X= 560/8 = 70 ml</br></p><br></br>

                        <p className="def"><b> Q.7</b> <b>A rice dealer bought 60 kg of rice worth Rs. 30 per kg and 40 kg of rice worth Rs. 35 per kg. He mixes the two and sells the mixture at Rs. 40 per kg.
                         What is the percentage profit in this deal?</b> <br></br><br></br> 
                        <b>Sol.</b>Total cost price of (60 + 40) 100kg of mixture = (60*30 + 40*35)<br>= 1800 + 1400</br><br>= Rs. 3200</br><br>Now, selling price of the mixture = 100 * 40 = Rs. 4000</br>
                        <br>Profit = 4000 - 3200 = Rs. 800</br><br>∴Required percentage profit = 800/3200 ∗ 100 = 25%</br> </p><br></br>

                        <p className="def"><b> Q.8</b> <b> A bottle of whisky contains 40% alcohol. If we replace a part of this whisky by another whisky containing 20% alcohol, the percentage of alcohol becomes 28%.
                         What quantity of whisky is replaced?</b> <br></br><br></br> 
                        <b>Sol.</b>∴Ratio of first and second whisky in the mixture= 8:12 = 2:3<br>Now, the quantity of whisky replaced is equal to the quantity of the second whisky added.</br>
                        <br>∴The quantity of whisky replaced = 3/5</br></p><br></br>

                        <h2><p><u> More Questions</u></p><br></br></h2>
                        
                        <p className="def"><b> Q.1</b><b> An alloy has copper and zinc in the ratio of 6:3 and another alloy has copper and tin in the ratio of 8:6. The equal weights of both the alloys are melted to form a new alloy.
                         What will be the weight of tin per kg of the new alloy?</b>  </p><br></br>

                        <p className="def"><b> Q.2</b><b>1/2 and 1/4 parts of two bottles are filled with milk. The bottles are then filled completely with water and the content of bottles is poured into a container.
                         Find the ratio of the milk and water in the container?</b>  </p><br></br>

                        <p className="def"><b> Q.3</b><b>Tea worth Rs. 126 per kg and Rs. 135 per kg are mixed with a third variety in the ratio 1 : 1 : 2. If the mixture is worth Rs. 153 per kg,
                         the price of the third variety per kg will be:</b>  </p><br></br>

                        <p className="def"><b> Q.4</b><b>In what ratio must a grocer mix two varieties of pulses 
                        costing Rs. 15 and Rs. 20 per kg respectively so as to get a mixture worth Rs. 16.50 kg?</b>  </p><br></br>

                        <p className="def"><b> Q.5</b><b>How many kilogram of sugar costing Rs. 9 per kg must be mixed with 27 kg of sugar costing Rs. 7 per kg so 
                        that there may be a gain of 10% by selling the mixture at Rs. 9.24 per kg?</b>  </p><br></br>
                        
                    </div>
            </div>

    )
}

export default MixtureAndAlligations;

