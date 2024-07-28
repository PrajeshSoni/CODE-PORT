<%@ Page Language="C#" AutoEventWireup="true" CodeFile="imggridaspx.aspx.cs" Inherits="imggridaspx" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <asp:GridView ID="GridView1" runat="server" AutoGenerateColumns="False" DataKeyNames="itemid" DataSourceID="SqlDataSource1" OnSelectedIndexChanged="GridView1_SelectedIndexChanged">
            <Columns>
                <asp:BoundField DataField="itemid" HeaderText="itemid" ReadOnly="True" SortExpression="itemid" />
                <asp:BoundField DataField="itemname" HeaderText="itemname" SortExpression="itemname" />
                <asp:BoundField DataField="prise" HeaderText="prise" SortExpression="prise" />
                <asp:BoundField DataField="contity" HeaderText="contity" SortExpression="contity" />
                <asp:TemplateField AccessibleHeaderText="Pic">
                    <EditItemTemplate>
                        <asp:TextBox ID="TextBox1" runat="server" Text='<%# Eval("img") %>'></asp:TextBox>
                    </EditItemTemplate>
                    <ItemTemplate>
                        <asp:Image ID="Image1" runat="server" ImageUrl='<%# Eval("img", "~/dhara/{0}") %>' />
                    </ItemTemplate>
                </asp:TemplateField>
            </Columns>
        </asp:GridView>
        <asp:FileUpload ID="FileUpload1" runat="server" />
        <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:ConnectionString %>" SelectCommand="SELECT * FROM [items]"></asp:SqlDataSource>
        <br />
    
    </div>
    </form>
</body>
</html>
