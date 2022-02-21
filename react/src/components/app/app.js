import fetchJson from "../../utils/fetch-json.js";

const App = async () => {
  const response = await fetchJson('http://backend:8080/index.php?r=ae', {
    method: 'GET', // или 'PUT'
    mode: 'no-cors',
    headers: {
      'Content-Type': 'application/json'
    }
  });

  return <div>{response}</div>;
};

export default App;
