<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        Enter name<asp:TextBox ID="txtnm" runat="server"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ControlToValidate="txtnm" ErrorMessage="Enter the name please"></asp:RequiredFieldValidator>
        <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ControlToValidate="txtnm" ErrorMessage="Enter only alphabets" ValidationExpression="^[a-zA-Z'.\s]{15}"></asp:RegularExpressionValidator>
        <br />
        Enter Phone<asp:TextBox ID="txtph" runat="server"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ControlToValidate="txtph" ErrorMessage="Enter phone number please dodhi"></asp:RequiredFieldValidator>
        <asp:RegularExpressionValidator ID="RegularExpressionValidator2" runat="server" ControlToValidate="txtph" ErrorMessage="enter 10 digits" ValidationExpression="\d{5,10}"></asp:RegularExpressionValidator>
        <br />
        Enter Password<asp:TextBox ID="txtpass" runat="server"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ControlToValidate="txtpass" ErrorMessage="Enter password please dodhi"></asp:RequiredFieldValidator>
        <asp:CompareValidator ID="CompareValidator1" runat="server" ControlToCompare="txtpass" ControlToValidate="txtcpass" ErrorMessage="Password and confirm password must be same" Operator="LessThan" Type="Integer"></asp:CompareValidator>
        <br />
        Enter Confirm Password<asp:TextBox ID="txtcpass" runat="server"></asp:TextBox>
        <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" ControlToValidate="txtcpass" ErrorMessage="Enter confirm please "></asp:RequiredFieldValidator>
        <br />
        Enter marks<asp:TextBox ID="TextBox1" runat="server"></asp:TextBox>
        <asp:RangeValidator ID="RangeValidator1" runat="server" ControlToValidate="TextBox1" ErrorMessage="Please enter marks between 0 to 100" MaximumValue="100" MinimumValue="0" Type="Integer"></asp:RangeValidator>
        <br />
        <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Text="Display" />
        <asp:ValidationSummary ID="ValidationSummary1" runat="server" ShowMessageBox="True" />
    
    </div>
    </form>
</body>
</html>
