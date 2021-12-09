<!doctype html>
<html>
<head>
  <!-- ... -->
 
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
  <style>
    * {
        font-size: 12px;
        font-family: 'DejaVu Sans', serif;
    }

    h1 {
        font-size: 18px;
    }

    .ticket {
        margin: 2px;
    }

    td,
    th,
    tr,
    table {
        border-top: 1px solid black;
        border-collapse: collapse;
        margin: 0 auto;
    }

    td.precio {
        text-align: right;
        font-size: 11px;
    }

    td.cantidad {
        font-size: 11px;
    }

    td.producto {
        text-align: center;
    }

    th {
        text-align: center;
    }


    .centrado {
        text-align: center;
        align-content: center;
    }

    .ticket {
        width: 800px;
        max-width: 10000px;
    }

    img {
        max-width: inherit;
        width: inherit;
    }

    * {
        margin: 0;
        padding: 0;
    }

    .ticket {
        margin: 0;
        padding: 0;
    }

    body {
        text-align: center;
    }
</style>
</head>
<body>
  @foreach ($venta as $tick)
<!-- https://www.fda.gov/food/food-labeling-nutrition/changes-nutrition-facts-label -->
<div class="p-1 border-2 border-black font-sans w-72">
    <div class="text-4xl font-extrabold leading-none">Nutrition Facts</div>
    <div class="leading-snug">8 servings per container</div>
    <div class="flex justify-between font-bold border-b-8 border-black">
        <div>Serving size</div><div>2/3 cup (55g)</div>
    </div>
    <div class="flex justify-between items-end font-extrabold">
        <div>
            <div class="font-bold">Amount per serving</div>
            <div class="text-4xl">Calories</div>
        </div>
        <div class="text-5xl">45</div>
    </div>
    <div class="border-t-4 border-black text-sm pb-1">
        <div class="text-right font-bold pt-1 pb-1">% Daily value*</div>
        <hr class="border-gray-500"/>
        <div class="flex justify-between">
            <div>
                <span class="font-bold">Total Fat</span> 8g
            </div>
            <div class="font-bold">10%</div>
        </div>
        <hr class="border-gray-500"/>
        <div class="flex justify-between">
            <div>Saturated Fat 1g</div>
            <div class="font-bold">5%</div>
        </div>
        <hr class="border-gray-500"/>
        <div>
            <span class="italic">Trans Fat</span> 8g
        </div>
        <hr class="border-gray-500"/>
        <div class="flex justify-between">
            <div>
                <span class="font-bold">Cholesterol</span> 0mg
            </div>
            <div class="font-bold">0%</div>
        </div>
        <hr class="border-gray-500"/>
        <div class="flex justify-between">
            <div>
                <span class="font-bold">Sodium</span> 160mg
            </div>
            <div class="font-bold">7%</div>
        </div>
        <hr class="border-gray-500"/>
        <div class="flex justify-between">
            <div>
                <span class="font-bold">Total Carbohydrate</span> 37g
            </div>
            <div class="font-bold">13%</div>
        </div>
        <hr class="border-gray-500"/>
        <div class="flex justify-between">
            <div class="pl-4">
                Dietary Fiber 4g
            </div>
            <div class="font-bold">14%</div>
        </div>
        <hr class="border-gray-500"/>
        <div class="pl-4">
            Total Sugar 12g
            <div class="pl-4">
                <hr class="border-gray-500"/>
                <div class="flex justify-between">
                    <div>Includes 10g Added Sugars</div>
                    <div class="font-bold">20%</div>
                </div>
            </div>
        </div>
        <hr class="border-gray-500"/>
        <div>
            <span class="font-bold">Protein</span> 3g
        </div>
    </div>
    <div class="border-t-8 border-black pt-1 text-sm">
        <div class="flex justify-between">
            <div>Vitamin D 2mcg</div>
            <div>10%</div>
        </div>
        <hr class="border-gray-500"/>
        <div class="flex justify-between">
            <div>Calcium 260mg</div>
            <div>20%</div>
        </div>
        <hr class="border-gray-500"/>
        <div class="flex justify-between">
            <div>Iron 8mg</div>
            <div>45%</div>
        </div>
        <hr class="border-gray-500"/>
        <div class="flex justify-between">
            <div>Potassium 240mg</div>
            <div>6%</div>
        </div>
        <div class="border-t-4 border-black flex leading-none text-xs pt-2 pb-1">
            <div class="pr-1">*</div>
            <div>The % Daily Value (DV) tells you how much a nutrient in a serving of food contributes to a daily diet. 2,000 calories a day is used for general nutrition advice.</div>
        </div>
    </div>
</div>
@endforeach
  <!-- ... -->
</body>
</html>