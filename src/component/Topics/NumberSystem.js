import React,{Component} from 'react';
import '../../css/Topics/numberSystem.css';

const NumberSystem = () => {
    return (
            <div className="numbersystem">
                    <h2>NumberSystem</h2>
                    <h4><p>Quick Revision</p></h4>
                    <div className="tips">
                        <p className="def"><b>Digit :</b> There are ten symbols as 0, 1, 2, 3, 4, 5, 6, 7, 8 and 9 to denote any number.They are known as digit.</p>
                        <h4 className="heading">Types of Numbers</h4>
                        <p className="def"><b>Natural Number : </b>The counting number are know as natural numbers. Ex- 1,2,3,4,5,........infinite are natural numbers.</p>
                        <p className="def"><b>Whole Number : </b>The counting numbers with zero(0) is called whole numbers. Ex- 0, 1, 2, 3, 4, 5,.....infinite are whole numbers.</p>
                        <p className="def"><b>Even Numbers : </b>A number divided by 2 and gives 0 as remainder is known as even numbers. Ex- 2, 4, 6, 8,... are even numbers.</p>
                        <p className="def"><b>Odd Numbers : </b>A number divided by 2 and give any number except 0 as remainder is know as odd numbers. Ex- 1, 3, 5, 7,..... are odd numbers.</p>
                        <p className="def"><b>Prime Numbers : </b>The number, that is not divided by any number except 1 or itself is called prime number. Ex- 2, 3, 5, 7,... are prime numbers.</p>
                        <p className="def"><b>Imprime Number : </b>The number, divisible by any number except 1 or itself is inprime number. Ex- 4, 6, 8, 9,.... are imprime numbers.<br/>Imprime numbers are also called as composite numbers.</p>
                        
                    </div>
            </div>

    )
}

export default NumberSystem;
