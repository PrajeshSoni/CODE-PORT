<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <asp:Label ID="Label2" runat="server" Text="Label"></asp:Label>
    
        <br />
        <asp:Label ID="Label1" runat="server" Text="name"></asp:Label>
&nbsp;
        <asp:TextBox ID="TextBox1" runat="server" OnTextChanged="TextBox1_TextChanged"></asp:TextBox>
&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ErrorMessage="RequiredFieldValidator" ControlToValidate="TextBox1">*</asp:RequiredFieldValidator>
&nbsp;&nbsp;&nbsp;<br />
        <br />
        <asp:Label ID="Label3" runat="server" Text="age"></asp:Label>
        &nbsp;&nbsp;&nbsp;<asp:TextBox ID="TextBox2" runat="server" OnTextChanged="TextBox2_TextChanged"></asp:TextBox>
        &nbsp;&nbsp;&nbsp;&nbsp;<asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ErrorMessage="RequiredFieldValidator" ControlToValidate="TextBox2">*</asp:RequiredFieldValidator>
&nbsp;&nbsp; &nbsp;<asp:RangeValidator ID="RangeValidator1" runat="server" ControlToValidate="TextBox2" ErrorMessage="RangeValidator" MaximumValue="22" MinimumValue="18" Type="Integer">age between 18 to22</asp:RangeValidator>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <br />
        <br />
        <asp:Label ID="Label4" runat="server" Text="stream"></asp:Label>
&nbsp;
        <asp:DropDownList ID="DropDownList1" runat="server">
            <asp:ListItem>BBA</asp:ListItem>
            <asp:ListItem>BCA</asp:ListItem>
            <asp:ListItem>BCOM</asp:ListItem>
            <asp:ListItem>BSC</asp:ListItem>
            <asp:ListItem></asp:ListItem>
        </asp:DropDownList>
&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator3" runat="server" ErrorMessage="RequiredFieldValidator" ControlToValidate="DropDownList1">*</asp:RequiredFieldValidator>
        <br />
        <br />
        <asp:Label ID="Label5" runat="server" Text="EMAIL"></asp:Label>
&nbsp;
        <asp:TextBox ID="TextBox3" runat="server"></asp:TextBox>
&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator4" runat="server" ErrorMessage="RequiredFieldValidator" ControlToValidate="TextBox3">*</asp:RequiredFieldValidator>
&nbsp;
        <asp:RegularExpressionValidator ID="RegularExpressionValidator1" runat="server" ControlToValidate="TextBox3" ErrorMessage="RegularExpressionValidator" ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
        <br />
        <br />
        <asp:Label ID="Label6" runat="server" Text="CONTECT NO"></asp:Label>
&nbsp;&nbsp;
        <asp:TextBox ID="TextBox4" runat="server"></asp:TextBox>
&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator5" runat="server" ErrorMessage="RequiredFieldValidator" ControlToValidate="TextBox4">*</asp:RequiredFieldValidator>
&nbsp;
        <asp:RangeValidator ID="RangeValidator2" runat="server" ControlToValidate="TextBox4" ErrorMessage="RangeValidator" MaximumValue="10" MinimumValue="1" Type="Integer"></asp:RangeValidator>
        <br />
        <br />
        <asp:Label ID="Label7" runat="server" Text="password"></asp:Label>
&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:TextBox ID="TextBox5" runat="server"></asp:TextBox>
&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator6" runat="server" ErrorMessage="RequiredFieldValidator" ControlToValidate="TextBox4">*</asp:RequiredFieldValidator>
        <br />
        <br />
        <asp:Label ID="Label8" runat="server" Text="conform password"></asp:Label>
&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:TextBox ID="TextBox6" runat="server"></asp:TextBox>
&nbsp;
        <asp:RequiredFieldValidator ID="RequiredFieldValidator7" runat="server" ErrorMessage="RequiredFieldValidator" ControlToValidate="TextBox4">*</asp:RequiredFieldValidator>
        <asp:CompareValidator ID="CompareValidator2" runat="server" ControlToCompare="TextBox5" ControlToValidate="TextBox6" ErrorMessage="password not match"></asp:CompareValidator>
        <br />
        <br />
        <asp:Button ID="Button1" runat="server" OnClick="Button1_Click" Text="submit" />
        <br />
        <br />
    
    </div>
    </form>
</body>
</html>
