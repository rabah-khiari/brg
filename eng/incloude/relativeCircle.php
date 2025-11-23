

    
    <div class="circle ps-0 mt-5">
        <div class="inner-circle"></div>
    </div>
    


<style>

.circle {
    
    position: relative;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background: conic-gradient(
        #f3d009  0% 27%, /* Workers: 25% */
        #88B7E3  28% 43%, /* Administration: 30% */
        #A4D3A2  44% 70%, /* Engineers: 40% */
        #F4A261  71% 100% /* Others: 5% */
    );
    margin: 0 auto;
}

.inner-circle {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 60%;
    height: 60%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    border-radius: 50%;
}


.color-box {
    display: inline-block;
    width: 20px;
    height: 20px;
    margin-right: 10px;
    vertical-align: middle;
}



</style>