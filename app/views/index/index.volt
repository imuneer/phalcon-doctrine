<h1>Congratulations!</h1>

<p>You're now flying with Phalcon. Great things are about to happen!</p>

<h2>Phalcon integration with Doctrine 2 ORM</h2>

<p>Table: customers</p>
<table width="300" border="1" cellpadding="2" cellspacing="3">
<thead>
  <tr><th>ID</th><th>Label</th></tr>
</thead>
<tbody>
  {% for index, customer in customers %}
    <tr>
      <td>{{ customer.getId() }}</td>
      <td>{{ customer.getLabel() }}</td>
    </tr>
  {% endfor %}
</tbody>
</table>
