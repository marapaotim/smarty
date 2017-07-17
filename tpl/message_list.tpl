<table class="table table-striped table-bordered">
  <thead>
    <tr> 
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>  
    </tr>
  </thead>
  <tbody>
    {foreach from=$people key=key item=i} 
      <tr>   
        <td>{$i.name}</td> 
        <td>{$i.email}</td> 
        <td>{$i.message}</td>  
      </tr>
    {/foreach} 
</tbody>
</table>  
  {for $foo=1 to $to}
     <a href="#" onclick="paginate_message({$foo})" class="btn btn-success">{$foo}</a>
  {/for} 