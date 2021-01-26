
// Js for Insert header
const showSelected = document.querySelector("#showSelected");
const inputs =  {
    size:    '<input type="text" name="size"   class="size" placeholder="Size">',
    height : '<input type="text" name="height" class="height" placeholder="Height">',
    width:   '<input type="text" name="width"  class="width"  placeholder="Width" >' ,
    length:  '<input type="text" name="length" class="length" placeholder="Length">',
    weight:  '<input type="text" name="weight" class="weight" placeholder="Weight">',
};

const show = () => {
    if(form.select[form.select.selectedIndex].text === "HxWxL") {
        this.showSelected.innerHTML = 
        `
        Height: ${inputs.height} <br>
        Width:  ${inputs.width} <br>
        Length: ${inputs.length} <br>
        `;  
    } else if(form.select[form.select.selectedIndex].text === "Weight"){
        this.showSelected.innerHTML = 
        `
        Weight: ${inputs.weight} <br>
        `;
    } else if(form.select[form.select.selectedIndex].text === "Size"){
        this.showSelected.innerHTML = 
        `
        Size: ${inputs.size} <br>
        `;
    }
}

const select_all = () => {
    var check = document.getElementsByName('check[]');
    var select_id = document.getElementById('select_id');

    if(select_id.value === 'select_all'){
        for (var i in check) {
            check[i].checked = true;
        }

    } else if(select_id.value === 'deselect_all') {
        for (var i in check) {
            check[i].checked = false;
        }
    }
}
       
