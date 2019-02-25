

<table class="table table-hover">
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
    <td><?php echo $request['OrgStreetAddr']; ?></td>
    <td><?php echo $request['OrgCity']; ?></td>
    <td><?php echo $request['OrgZip']; ?></td>
    <td><?php echo $request['OrgPhone']; ?></td>
    <td><?php echo $request['OrgAdminEmail']; ?></td>
    <td><?php echo $request['ReqName']; ?></td>
    <td><?php echo $request['ReqEmail']; ?></td>
    <td><?php echo $request['ReqPhone']; ?></td>
    <td><?php echo $request['ReqKits']; ?></td>
    <td><?php echo $request['ReqDate']; ?></td>
    <?php endforeach; ?>
    </tr>


