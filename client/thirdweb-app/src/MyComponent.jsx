import React, { useState, useEffect } from "react";
import fileContent from "./data_fetch.txt"; // Import the text file
import { ethers } from "ethers";
import { useStateContext } from "./context";
function MyComponent() {
  let prev_data = "dummytfuyu327tf8egwyu";
  const [content, setContent] = useState(null);
  const [data, setData] = useState(null);
  const [error, setError] = useState(null);
  const [dataChanged, setDataChanged] = useState(false);
  const { submitIdea, connect, address } = useStateContext();
  if (address) {
    console.log("Address", address);
  } else {
    connect();
  }
  useEffect(() => {
    fetchTextFile();

    // Fetch the text file content every 3 seconds
    const intervalId = setInterval(fetchTextFile, 15000);

    // Cleanup function to clear the interval on component unmount
    return () => clearInterval(intervalId);
    // Fetch the file content when the component mounts
  }, [connect, address]);

  const fetchTextFile = async () => {
    try { 
      const response = await fetch(fileContent);
      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }
      const text = await response.text();
      setContent(text);
      if (text !== prev_data && text !== "{\"Idea_No\":null,\"Idea_Title\":null,\"Idea_Desc\":null}") {
        await submitIdea(text);
        prev_data = text;
        setDataChanged(true);
      } // Call submitIdea with the fetched text content
    } catch (error) {
      console.error("Error fetching text file:", error);
    }
  };

  return (
    <div>
      <h1>Data Pushed to blockchain:</h1>
      <pre>{content}</pre>
    </div>
  );
}

export default MyComponent;
