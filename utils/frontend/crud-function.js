async function crudOperation(params, operation) {
  const data = new FormData();

  Object.entries(params).forEach(param => {
    data.append(param[0], param[1]);
  });

  data.append('operation', operation);

  const response = await fetch('http://localhost/project/eventsCRUD.php', {
    method: 'POST',
    body: data
  }).then(res => res.text());
  console.log(response);
}

crudOperation(
  {
    id: 5,
    nom_even: 'CHILLING',
    date: '2018-01-19',
    duree: '9 jours',
    img: 'chill.jpeg'
  },
  'CREATE'
);
