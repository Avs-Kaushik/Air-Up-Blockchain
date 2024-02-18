import React, { useContext, createContext } from "react";
import {
  useAddress,
  useContract,
  useMetamask,
  useContractWrite,
  useContractRead,
} from "@thirdweb-dev/react";
import { ethers } from "ethers";

const StateContext = createContext();

export const StateContextProvider = ({ children }) => {
    
    const { contract } = useContract(
      "0x63aC8a9E5b147de263981Ef736b8d2d0A2aC1DbB"
    );

      const { mutateAsync: submitIdea} = useContractWrite(contract, "submitIdea")

    
      const address = useAddress();
      const connect = useMetamask();

      const IdeaSubmission = async (formData) => {
        try {
          await submitIdea({
            args: [formData], // Make sure formData is in the expected format for the smart contract
          });
          console.log("Contract call success");
        } catch (error) {
          console.error("Contract call failed", error);
        }
      };

      return (
        <StateContext.Provider
          value={{
            address,
            contract,
            connect,
            submitIdea:IdeaSubmission
          }}
        >
          {children}
        </StateContext.Provider>
      );
    };
    
    export const useStateContext = () => useContext(StateContext);