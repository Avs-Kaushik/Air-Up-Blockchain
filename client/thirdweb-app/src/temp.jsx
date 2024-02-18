import React, { useState, useEffect } from "react";
import { ethers } from "ethers";
import { useStateContext } from "./context";
function MyComponent() {
  const [data, setData] = useState(null);
  const [error, setError] = useState(null);
  const { submitIdea, connect, address } = useStateContext();
  if (address) {
    console.log("Address", address);
  } else {
    connect();
  }
  useEffect(() => {
    const longPolling = async () => {
      try {
        let prev = "dummy5rt6iy78uip9o";
        while (true) {
          const response = await fetch("http://localhost/AIRUP/form/data.php");
          if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
          }
          const responseBody = await response.text(); // Get raw response body
          console.log("Raw response body:", responseBody);
          const responseData = JSON.parse(responseBody);
          setData(responseData);
          let idea_data = JSON.stringify(responseData);
          if (prev !== idea_data) { 
            await submitIdea(idea_data);
            prev = idea_data;
          }
          // Optional timeout before next request
          await new Promise((resolve) => setTimeout(resolve, 3000)); // Adjust timeout as needed
        }
      } catch (error) {
        setError(error.message);
        console.error("Error long polling:", error);
      }
    };

    longPolling();

    return () => clearTimeout(longPolling); // Cleanup function
  }, []);

  return (
    <div>
      {error ? (
        <p>Error: {error}</p>
      ) : data ? (
        <>
          <p>Idea No: {data.Idea_No}</p>
          <p>idea name: {data.Idea_Title}</p>
          <p>Idea Desc: {data.Idea_Desc}</p>
        </>
      ) : (
        <p>Loading data...</p>
      )}
    </div>
  );
}

export default MyComponent;
