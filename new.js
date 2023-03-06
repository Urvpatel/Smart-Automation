// $(documnet).ready(function()
// {
// 	$('.decrement-btn').click(function(e)
// 	{
// 		e.preventDefault();
// 		var qty=$('.input-qt').val();
		
// 		var value=parseInt(qty,10);
// 		value = isNaN(value) ? 0:value;
// 		if (value < 10)
// 		{
// 			value++;
// 			$('.input-qt').val(value);
// 		}
// 	});
// });

const[quantity,setquantity]=useState(1);
const handleinc = () =>{
	setquantity(prevCount => prevCount +1);
}