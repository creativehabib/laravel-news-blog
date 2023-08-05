import {data} from "autoprefixer";

export function initExample1() {
  return {
    usersData: [
      {
        id: "1",
        avatar_url: "/images/200x200.png",
        name: "John Doe",
        age: "24",
        phone: "443-893-2318",
        role: "Superadmin",
        role_bg:
          "bg-secondary/10 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light",
        status: true,
      },
      {
        id: "2",
        avatar_url: "/images/200x200.png",
        name: "Sabina Mores",
        age: "26",
        phone: "442-893-2318",
        role: "Author",
        role_bg: "bg-info/10 text-info dark:bg-info/15",
        status: false,
      },
      {
        id: "3",
        avatar_url: "/images/200x200.png",
        name: "Tom Robert",
        age: "34",
        phone: "443-893-2318",
        role: "Admin",
        role_bg:
          "bg-secondary/10 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light",
        status: true,
      },
      {
        id: "4",
        avatar_url: "/images/200x200.png",
        name: "Nolan Doe",
        age: "28",
        phone: "443-893-2318",
        role: "Author",
        role_bg: "bg-info/10 text-info dark:bg-info/15",
        status: true,
      },
    ],
    allSelected: false,
    userIds: [],
    updateCheckAll() {
      this.allSelected = this.usersData.length === this.userIds.length;
    },
    selectAll() {
      this.userIds = [];
      if (this.allSelected) {
        for (user in this.usersData) {
          this.userIds.push(this.usersData[user].id.toString());
        }
      }
    },
  };
}

export function initGridTableExapmle() {
  return {
    table: null,
    config: {
      columns: [
        {
          id: "id",
          name: "ID",
          formatter: (cell) => Gridjs.html(`<span class="mx-2">${cell}</span>`),
        },
        {
          id: "title",
          name: "Title",
          formatter: (cell) =>
            Gridjs.html(
              `<span class="text-slate-700 dark:text-navy-100 font-medium">${cell}</span>`
            ),
        },
        {
          id: "avatar_url",
          name: "Image",
          sort: false,
          formatter: (cell) =>
            Gridjs.html(`<div class="avatar flex">
                                    <img class="rounded-full" src="${cell}" alt="avatar">
                                </div>`),
        },
        {
          id: "post-created-by",
          name: "Created By",
        },
        {
          id: "phone",
          name: "Post Number",
        },
        {
          name: "Actions",
          sort: false,
          formatter: () =>
            Gridjs.html(`<div class="flex justify-center space-x-2">
                            <button @click="editItem" class="btn h-8 w-8 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button @click="deleteItem" class="btn h-8 w-8 p-0 text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25">
                                <i class="fa fa-trash-alt"></i>
                            </button>
                        </div>`),
        },
      ],

        server: {
            url: 'https://lineone-laravel.test/api/posts',
            then: data => data.data.map(card => [card.id, card.title, card.image, card.user['name'],card.user['id']]),
            handle: (res) => {
                // no matching records found
                if (res.status === 404) return {data: []};
                if (res.ok) return res.json();

                throw Error('oh no :(');
            },
        },
        sort: true,
      search: true,
      pagination: {
        enabled: true,
        limit: 10,
      }
    },
    init() {
      this.table = new Gridjs.Grid(this.config).render(this.$root);
    },
    deleteItem() {
      this.$notification({ text: "Item remove action", variant: "warning" });
    },

    editItem() {
      this.$notification({ text: "Item edit action", variant: "info" });
    },
  };
}
