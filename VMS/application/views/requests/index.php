

<div class="table-responsive">
    <table class="table table-sm table-hover table-responsive-lg">
  <thead>
    <tr>
      <th scope="col">Org Name</th>
      <th scope="col">Org Street</th>
      <th scope="col">Org City</th>
      <th scope="col">Org Zip</th>
      <th scope="col">Org Phone</th>
      <th scope="col">Org Email</th>
      <th scope="col">Req Name</th>
      <th scope="col">Req Email</th>
      <th scope="col">Req Phone</th>
      <th scope="col">Req kits</th>
      <th scope="col">Req Date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($requests as $request) : ?>
    <tr class="table-active">
    <th scope="row"><?php echo $request['OrgName']; ?></th>
    <td class="small"><?php echo $request['OrgStreetAddr']; ?></td>
    <td class="small"><?php echo $request['OrgCity']; ?></td>
    <td class="small"><?php echo $request['OrgZip']; ?></td>
    <td class="small"><?php echo $request['OrgPhone']; ?></td>
    <td class="small"><?php echo $request['OrgAdminEmail']; ?></td>
    <td class="small"><?php echo $request['ReqName']; ?></td>
    <td class="small"><?php echo $request['ReqEmail']; ?></td>
    <td class="small"><?php echo $request['ReqPhone']; ?></td>
    <td class="small"><?php echo $request['ReqKits']; ?></td>
    <td class="small"><?php echo $request['ReqDate']; ?></td>
    <?php endforeach; ?>
    </tr>
</tbody>
</table>
</div>


