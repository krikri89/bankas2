function Home({ account }) {
  return (
    <>
      <h1>Client list</h1>

      <table className="table">
        <tr>
          <th>ID</th>
          <th>Surname</th>
          <th>Name</th>
          <th>Personal Number</th>
          <th>Account Number</th>
          <th>Amount</th>
          <th>Delete</th>
          <th>Edit</th>
        </tr>

        {/* foreach ($account as $key => $user) : ?> */}
        {account.map((value, index) => (
          <tr>
            <td key={index[0]}>{value}</td>
            <td key={index[1]}>{value}</td>
            <td key={index[2]}>{value}</td>
            <td key={index[3]}>{value}</td>
            <td key={index[4]}>{value}</td>
            <td key={index[5]}>{value}</td>
            {/* <td><?= $user['surname'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['personalId'] ?></td>
            <td>LT<?= $user['accountNumber'] ?></td>
            <td><?= $user['amount'] ?> $</td> */}
            <td>
              <form
                action="<?= 'http://yolabank.lt/delete/' . $user['id'] ?>"
                method="post"
              >
                <button type="submit">Delete</button>
              </form>
            </td>
            <td>
              <a href="<?= '//yolabank.lt/addCash/' . $user['id'] ?>">Edit</a>
            </td>
          </tr>
        ))}
      </table>
    </>
  );
}

export default Home;
