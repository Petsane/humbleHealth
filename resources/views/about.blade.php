<style>
    .main-about{
        background-image: url(/images/hjk4.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
        padding: 100px 0px 80px 0px;
        padding-left: 100px;
        padding-right: 100px;
        display: grid;
        grid-template-columns: 50% 50%
    }
    .about-vid{
        margin-left: 200px;
    }
    .about-cont{
    }
    .heading{
        font-size: 30px;
        line-height: 32px;
        margin-bottom: 20px;
    }
    .img{
        width: 400px;
    }
    .homeo-cont{
        background-color: white;
        padding: 100px 0px 80px 0px;
    }
    .homeo-subCont{
        margin-left: 200px;
    }
</style>
<x-app-layout>

    <div>
        <img style="width:100%; height: 300px; margin-top:65px" src="https://www.eomega.org/sites/default/files/styles/scale_width_1440/public/hero/omega_institute_homeopathy_0.jpg?itok=iyOjARxh" alt="">
    </div>

    <div class="main-about">

        <div class="about-vid">
            <img class="img" src="https://t4.ftcdn.net/jpg/01/69/67/63/360_F_169676313_fwdtWWsDSTTewZ5Qez6ryb5VjOCyDCDi.jpg" alt="">
        </div>

        <div class="about-cont">

            <h1 class="heading">Your Health is Our Success</h1>

            <p>
                Humble remedies company is a dedicated supplier of all homeopathic medicines<br> 
                including polycrests, small remedies, organopathics, gemmotherapeutics.<br> 
                Homeopathic injectables, herbal tinctures, tissue salts and electroloids.<br>
                Our main purpose is to extend the availability of homeopathic medicines<br> 
                and reach every corner of South Africa.
            </p>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-8 rounded-full">Explore our products</button>

        </div>

    </div>

    <div class="homeo-cont">

        <div class="homeo-subCont">

            <h1 class="heading">What Is Homeopathy</h1>

            <p>
                Homeopathy is a gentle and natural healing system that works with the body<br>
                to relieve symptoms, restore vitality, and improve overall health.<br>
                Homeopathy can help strengthen the body to fight short-term illness<br>
                such as colds, flus, earache, sore throats etc,<br>
                and can treat chronic conditions like asthma, depression, autism, arthritis etc.
            </p>
            <p style="padding-top:20px">
                Homeopathy is also useful in veterianary as an adjunct therapy to manage post-operativepain<br>
                and to speed healing after injuries. However, as a complete and well-developed system of <br>
                medicine, homeopathy is effective as the sole form of treatment for most conditions that affect animals.
            </p>

        </div>

        <div>

        </div>

    </div>

</x-app-layout>